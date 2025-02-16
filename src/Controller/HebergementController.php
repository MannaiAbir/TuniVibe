<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Form\HebergementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class HebergementController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Afficher tous les hébergements
    #[Route('/hebergements', name: 'hebergement_index')]
    public function index(): Response
    {
        $hebergements = $this->entityManager->getRepository(Hebergement::class)->findAll();
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
            'programmes' => $programmes,
        ]);
    }

    // Ajouter un nouvel hébergement
    #[Route('/hebergement/new', name: 'hebergement_new')]
    public function new(Request $request): Response
    {
        $hebergement = new Hebergement();

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
                    $this->getParameter('hebergement_image_directory'),  // Utilisation du paramètre pour le répertoire
                    $newFilename
                );

                // Sauvegarder le nom du fichier dans l'entité
                $hebergement->setImage($newFilename);
            } else {
                // Utiliser une image par défaut si aucune image n'est téléchargée
                $hebergement->setImage('default_image.jpg');
            }

            // Sauvegarder l'hébergement dans la base de données
            $this->entityManager->persist($hebergement);
            $this->entityManager->flush();

            // Rediriger vers la liste des hébergements
            return $this->redirectToRoute('hebergement_index');  // Redirection vers la liste des hébergements
        }

        return $this->render('hebergement/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/hebergement/edit/{idhebergement}', name: 'hebergement_edit')]
public function edit(int $idhebergement, Request $request): Response
{
    $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

    if (!$hebergement) {
        throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
    }

    $form = $this->createForm(HebergementType::class, $hebergement);
    $form->handleRequest($request);

    // Si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Sauvegarder les modifications
        $this->entityManager->flush();

        // Vérifier la page d'origine
        $referer = $request->headers->get('referer');
        
        if (strpos($referer, 'hebergement_show') !== false) {
            // Si l'utilisateur vient de la page de détails
            return $this->redirectToRoute('hebergement_show', ['idhebergement' => $hebergement->getIdhebergement()]);
        } else {
            // Si l'utilisateur vient de la liste des hébergements
            return $this->redirectToRoute('hebergement_index');
        }
    }

    return $this->render('hebergement/edit.html.twig', [
        'form' => $form->createView(),
    ]);
}

    // Supprimer un hébergement
   // Supprimer un hébergement
   #[Route('/hebergement/delete/{idhebergement}', name: 'hebergement_delete')]
   public function delete(int $idhebergement): Response
   {
       $hebergement = $this->entityManager->getRepository(Hebergement::class)->find($idhebergement);

       if (!$hebergement) {
           throw $this->createNotFoundException('L\'hébergement avec l\'id ' . $idhebergement . ' n\'a pas été trouvé.');
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

