<?php
namespace App\Controller;

use App\Entity\Hebergement;
use App\Entity\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\HebergementType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse; // Importation de RedirectResponse

   




use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;




class HebergementController extends AbstractController
{
    private $entityManager;

    // Injecter EntityManagerInterface via le constructeur
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }



  // Afficher les hébergements de l'utilisateur connecté
#[Route('/hebergements', name: 'hebergement_index')]
public function index(): Response
{
    $user = $this->getUser();
    if (!$user) {
        throw $this->createAccessDeniedException('Vous devez être connecté pour voir vos hébergements.');
    }

    // Récupérer uniquement les hébergements appartenant à l'utilisateur connecté
    $hebergements = $this->entityManager
        ->getRepository(Hebergement::class)
        ->findBy(['user' => $user]);

    // Récupérer les statuts des réservations associées à chaque hébergement
    foreach ($hebergements as $hebergement) {
        $reservations = $this->entityManager->getRepository(Reservation::class)
            ->findBy(['hebergement' => $hebergement, 'user' => $user]);

        // Si une réservation existe pour cet hébergement, on récupère son statut
        $hebergement->reservationStatus = count($reservations) > 0 ? $reservations[0]->getStatut() : 'Aucune réservation';
    }

    return $this->render('hebergement/index.html.twig', [
        'hebergements' => $hebergements,
    ]);
}


   // Afficher un hébergement spécifique et ses réservations
#[Route('/hebergement/{idhebergement<\d+>}', name: 'hebergement_show')]
public function show(int $idhebergement): Response
{
    $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

    if (!$hebergement) {
        throw $this->createNotFoundException('Hébergement non trouvé');
    }

    // Récupérer les réservations associées à cet hébergement
    $reservations = $this->entityManager->getRepository(Reservation::class)
        ->findBy(['hebergement' => $hebergement]);

    return $this->render('hebergement/show.html.twig', [
        'hebergement' => $hebergement,
        'programmes' => $hebergement->getProgrammes(),
        'reservations' => $reservations,
    ]);
}



    // Ajouter un nouvel hébergement (uniquement pour l'utilisateur connecté)
    #[Route('/hebergement/new', name: 'hebergement_new')]
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour créer un hébergement.');
        }

        $hebergement = new Hebergement();
        // Associer l'utilisateur connecté à l'hébergement
        $hebergement->setUser($user);

        // Créer le formulaire
        $form = $this->createForm(HebergementType::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                // Générer un nouveau nom pour l'image
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                // Déplacer l'image dans le répertoire configuré
                $imageFile->move(
                    $this->getParameter('images_directory'),
                    $newFilename
                );

                // Enregistrer le nom du fichier dans l'entité
                $hebergement->setImage($newFilename);
            } else {
                // Utiliser une image par défaut si aucune image n'est téléchargée
                $hebergement->setImage('default_image.jpg');
            }

            // Sauvegarder l'hébergement en base de données
            $this->entityManager->persist($hebergement);
            $this->entityManager->flush();

            return $this->redirectToRoute('hebergement_index');
        }

        return $this->render('hebergement/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/hebergement/edit/{idhebergement}', name: 'hebergement_edit')]
public function edit(int $idhebergement, Request $request, EntityManagerInterface $entityManager): Response
{
    $hebergement = $entityManager->getRepository(Hebergement::class)->find($idhebergement);

    if (!$hebergement) {
        throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
    }

    // Vérifier si l'utilisateur connecté est administrateur ou le propriétaire
    if ($this->getUser() !== $hebergement->getUser() && !$this->isGranted('ROLE_ADMIN')) {
        throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres hébergements ou ceux auxquels vous avez accès en tant qu\'administrateur.');
    }

    // Sauvegarde de l'ancienne image
    $oldImage = $hebergement->getImage();

    $form = $this->createForm(HebergementType::class, $hebergement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        /** @var UploadedFile $imageFile */
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            // Générer un nom unique pour la nouvelle image
            $newFilename = uniqid().'.'.$imageFile->guessExtension();

            // Déplacer l'image vers le dossier de stockage
            try {
                $imageFile->move(
                    $this->getParameter('images_directory'), // Configuré dans services.yaml
                    $newFilename
                );
            } catch (FileException $e) {
                throw new \Exception('Erreur lors de l\'upload de l\'image');
            }

            // Supprimer l'ancienne image si elle existe
            if ($oldImage) {
                $oldImagePath = $this->getParameter('images_directory') . '/' . $oldImage;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Mettre à jour l'entité avec le nouveau fichier
            $hebergement->setImage($newFilename);
        }

        $entityManager->flush();

        // Vérifier si l'utilisateur est un administrateur
        if ($this->isGranted('ROLE_ADMIN')) {
            // Rediriger l'administrateur vers la page de détails dans l'admin
            return $this->redirectToRoute('adminhebergement_detail', ['idhebergement' => $hebergement->getIdhebergement()]);
        } else {
            // Rediriger l'éditeur vers la page de détails dans l'espace utilisateur
            return $this->redirectToRoute('hebergement_show', ['idhebergement' => $hebergement->getIdhebergement()]);
        }
    }

    return $this->render('hebergement/edit.html.twig', [
        'form' => $form->createView(),
        'hebergement' => $hebergement
    ]);
}

#[Route('/hebergement/delete/{idhebergement}', name: 'hebergement_delete')]
public function delete(int $idhebergement, Request $request): Response
{
    // Récupérer l'hébergement à partir de l'ID
    $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

    // Vérifier si l'hébergement existe
    if (!$hebergement) {
        throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
    }

    // Vérifier si l'utilisateur connecté est administrateur ou le propriétaire
    if ($this->getUser() !== $hebergement->getUser() && !$this->isGranted('ROLE_ADMIN')) {
        throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres hébergements ou ceux auxquels vous avez accès en tant qu\'administrateur.');
    }

    // Supprimer les programmes associés à l'hébergement
    foreach ($hebergement->getProgrammes() as $programme) {
        $this->entityManager->remove($programme);
    }

    // Supprimer l'hébergement
    $this->entityManager->remove($hebergement);
    $this->entityManager->flush();

    // Récupérer l'URL précédente (la page où l'utilisateur se trouve)
    $referer = $request->headers->get('referer');
    
    // Rediriger vers la page précédente ou vers la page d'accueil de l'hébergement
    return $referer ? new RedirectResponse($referer) : $this->redirectToRoute('hebergement_index');
}

#[Route('/reservation/{idReservation}/{action}', name: 'reservation_traiter', methods: ['POST'])]
public function traiterReservation(
    int $idReservation, 
    string $action, 
    EntityManagerInterface $entityManager, 
    MailerInterface $mailer,
    LoggerInterface $logger
): JsonResponse {
    $reservation = $entityManager->getRepository(Reservation::class)->find($idReservation);

    if (!$reservation) {
        return $this->json(['error' => 'Réservation non trouvée'], 404);
    }

    if ($reservation->getStatut() !== 'pending') {
        return $this->json(['error' => 'Réservation déjà traitée'], 400);
    }

    $user = $reservation->getUser();
    if (!$user || !$user->getEmail()) {
        return $this->json(['error' => 'Utilisateur non trouvé ou email invalide'], 400);
    }

    $hebergement = $reservation->getHebergement();
    if (!$hebergement) {
        return $this->json(['error' => 'Hébergement introuvable'], 400);
    }

    if ($action === 'accepter') {
        $reservation->setStatut('accepted');
        $subject = 'Votre réservation a été acceptée !';

        $proprietaire = $hebergement->getUser();  // Ici on récupère le propriétaire de l'hébergement
        $numeroProprietaire = $proprietaire ? strval($proprietaire->getNumeroTelephone()) : 'Non disponible'; // Si le propriétaire existe, on récupère son numéro
        
        // Ajout du message avec le numéro du propriétaire
        $message = "Bonjour {$user->getUsername()},\n\nVotre demande de réservation pour l'hébergement '{$hebergement->getNom()}' a été acceptée.\n\n";
        $message .= "Merci de contacter le propriétaire au numéro suivant : {$numeroProprietaire} pour plus de détails.";
    } elseif ($action === 'refuser') {
        $reservation->setStatut('refused');
        $subject = 'Votre réservation a été refusée';
        $message = "Bonjour {$user->getUsername()},\n\nNous sommes désolés, mais votre demande de réservation pour l'hébergement '{$hebergement->getNom()}' a été refusée.";
    } else {
        return $this->json(['error' => 'Action invalide'], 400);
    }

    try {
        $entityManager->flush();
    } catch (\Exception $e) {
        $logger->error('Erreur lors de la mise à jour de la réservation: ' . $e->getMessage());
        return $this->json(['error' => 'Erreur lors de la mise à jour de la réservation'], 500);
    }

    try {
        $email = (new Email())
            ->from('aouadimariem25@gmail.com')
            ->to($user->getEmail())
            ->subject($subject)
            ->text($message)
            ->html(nl2br($message));

        $mailer->send($email);
    } catch (\Exception $e) {
        $logger->error('Erreur lors de l\'envoi de l\'email: ' . $e->getMessage());
        return $this->json(['error' => 'Erreur lors de l\'envoi de l\'email'], 500);
    }

    // ✅ Retour JSON avec les informations de la réservation, statut, et message de notification
    return $this->json([
        'success' => true,
        'message' => 'Statut de la réservation mis à jour et email envoyé',
        'statut' => $reservation->getStatut(),
        'notification' => 'Votre réservation a été ' . ($action === 'accepter' ? 'acceptée' : 'refusée') . '.'
    ]);
}



#[Route('/hebergement/{idhebergement}/reserver', name: 'hebergement_reserver', methods: ['POST'])]
public function reserver(Hebergement $hebergement, EntityManagerInterface $entityManager, Security $security): Response
{
    $user = $security->getUser();
    
    if (!$user) {
        return $this->json(['error' => 'Vous devez être connecté pour réserver.'], 403);
    }

    // Vérifier que l'utilisateur n'est pas le propriétaire de l'hébergement
    if ($user === $hebergement->getUser()) {
        return $this->json(['error' => 'Vous ne pouvez pas réserver votre propre hébergement.'], 403);
    }

    // Vérifier si l'utilisateur a déjà une réservation pour cet hébergement
    $reservationExistante = $entityManager->getRepository(Reservation::class)->findOneBy([
        'hebergement' => $hebergement,
        'user' => $user
    ]);

    if ($reservationExistante) {
        return $this->json(['error' => 'Vous avez déjà une réservation en attente ou acceptée pour cet hébergement.'], 403);
    }

    // Créer la réservation
    $reservation = new Reservation();
    $reservation->setHebergement($hebergement);
    $reservation->setUser($user);
    $reservation->setStatut('pending'); // Statut 'pending' pour indiquer que la demande est en attente

    // Sauvegarder la réservation en base de données
    $entityManager->persist($reservation);
    $entityManager->flush();

    return $this->json([
        'success' => true,
        'message' => 'Votre demande de réservation a été envoyée au propriétaire.'
    ]);
}

#[Route('/adminhebergement/detailhebergement/{idhebergement}', name: 'adminhebergement_detail')]
public function detailHebergement(int $idhebergement): Response
{
    // Fetch the accommodation with the ID
    $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

    if (!$hebergement) {
        throw $this->createNotFoundException('Hébergement non trouvé');
    }

    // Fetch the user associated with this accommodation
    $user = $hebergement->getUser();

    // Fetch all accommodations associated with this user
    $hebergements = $this->entityManager->getRepository(Hebergement::class)
        ->findBy(['user' => $user]); // Fetch all accommodations for this user

    // Pass both the single hebergement and all other hebergements associated with the user
    return $this->render('adminhebergement/detailhebergement.html.twig', [
        'hebergements' => $hebergements, // Pass all the accommodations
    ]);
}





}