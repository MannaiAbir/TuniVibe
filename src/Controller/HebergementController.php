<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Form\HebergementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HebergementController extends AbstractController
{
    private EntityManagerInterface $entityManager;

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

        return $this->render('hebergement/index.html.twig', [
            'hebergements' => $hebergements,
        ]);
    }

    // Afficher un hébergement spécifique et ses programmes
    #[Route('/hebergement/{idhebergement<\d+>}', name: 'hebergement_show')]
    public function show(int $idhebergement): Response
    {
        $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

        if (!$hebergement) {
            throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
        }

        $programmes = $hebergement->getProgrammes();

        return $this->render('hebergement/show.html.twig', [
            'hebergement' => $hebergement,
            'programmes'  => $programmes,
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

    // Modifier un hébergement (seulement si l'utilisateur connecté en est le propriétaire)
    #[Route('/hebergement/edit/{idhebergement}', name: 'hebergement_edit')]
    public function edit(int $idhebergement, Request $request): Response
    {
        $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

        if (!$hebergement) {
            throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
        }

        // Vérifier que l'utilisateur connecté est bien le propriétaire de l'hébergement
        if ($this->getUser() !== $hebergement->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres hébergements.');
        }

        $form = $this->createForm(HebergementType::class, $hebergement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            // Redirection selon la provenance
            $referer = $request->headers->get('referer');
            if (strpos($referer, 'hebergement_show') !== false) {
                return $this->redirectToRoute('hebergement_show', ['idhebergement' => $hebergement->getIdhebergement()]);
            } else {
                return $this->redirectToRoute('hebergement_index');
            }
        }

        return $this->render('hebergement/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Supprimer un hébergement (seulement si l'utilisateur connecté en est le propriétaire)
    #[Route('/hebergement/delete/{idhebergement}', name: 'hebergement_delete')]
    public function delete(int $idhebergement): Response
    {
        $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

        if (!$hebergement) {
            throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
        }

        // Vérifier que l'utilisateur connecté est bien le propriétaire de l'hébergement
        if ($this->getUser() !== $hebergement->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres hébergements.');
        }

        // Supprimer les programmes associés à l'hébergement
        foreach ($hebergement->getProgrammes() as $programme) {
            $this->entityManager->remove($programme);
        }

        // Supprimer l'hébergement
        $this->entityManager->remove($hebergement);
        $this->entityManager->flush();

        return $this->redirectToRoute('hebergement_index');
    }
}
