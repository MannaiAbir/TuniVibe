<?php

namespace App\Controller;

use App\Entity\Evenements;
use App\Repository\EvenementsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EvenementsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EvenementsController extends AbstractController
{
    //#[Route('/evenements', name: 'app_evenements')]
    //public function index(EvenementsRepository $evenementsRepository): Response
    //{
        // Récupérer la liste des événements depuis le repository
       // $evenements = $evenementsRepository->findAll();

        // Passer la liste des événements au template Twig
        //return $this->render('evenements/index.html.twig', [
       //     'evenements' => $evenements,
       // ]);
   // }
//}
#[Route('/evenements', name: 'app_evenements_index', methods: ['GET'])]
public function index(EvenementsRepository $evenementsRepository): Response
{
    return $this->render('evenements/index.html.twig', [
        'evenements' => $evenementsRepository->findAll(),
    ]);
}




#[Route('/evenements/new', name: 'app_evenements_new', methods: ['GET', 'POST'])]

public function new(Request $request, EntityManagerInterface $entityManager): Response
{
    $evenement = new Evenements();

     // Récupérer les IDs depuis les paramètres de requête
     $activityIds = $request->query->all('activities');
    
    

     // Ajouter les activités présélectionnées à l'événement
     foreach ($activityIds as $id) {
        $activite = $entityManager->getRepository(Activites::class)->find($id);
        if ($activite) {
            $evenement->addActivite($activite);
        }
    }

    
    $form = $this->createForm(EvenementsType::class, $evenement);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($evenement);
        $entityManager->flush();

        $this->addFlash('success', 'L\'événement a été créé avec succès.');
        return $this->redirectToRoute('app_evenements_index');
    }

    return $this->render('evenements/new.html.twig', [
        'evenement' => $evenement,
        'form' => $form->createView(),
    ]);
}


    #[Route('/evenements/public', name: 'app_evenements_public', methods: ['GET'])]
    public function publicIndex(EvenementsRepository $evenementsRepository): Response
    {
        return $this->render('evenements/user_index.html.twig', [
             'evenements' => $evenementsRepository->findAll(),
        ]);
    }

    // src/Controller/EvenementsController.php
    #[Route('/evenements/{id}', name: 'app_evenements_delete', methods: ['POST'])]
public function delete(Request $request, Evenements $evenement, EntityManagerInterface $entityManager): Response
{
    // Vérifie la validité du token CSRF
    if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
        // Supprime l'événement de la base de données
        $entityManager->remove($evenement);
        $entityManager->flush();
    }

    // Redirige vers la liste des événements
    return $this->redirectToRoute('app_evenements_index', [], Response::HTTP_SEE_OTHER);
}


#[Route('/evenements/{id}/edit', name: 'app_evenements_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Evenements $evenement, EntityManagerInterface $entityManager): Response
{
    // Crée le formulaire de modification
    $form = $this->createForm(EvenementsType::class, $evenement);
    $form->handleRequest($request);

    // Si le formulaire est soumis et valide
    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistre les modifications en base de données
        //$this->getDoctrine()->getManager()->flush(); 
        $entityManager->flush(); 


        // Redirige vers la liste des événements
        return $this->redirectToRoute('app_evenements_index', [], Response::HTTP_SEE_OTHER);
    }

     // Gestion spécifique pour Turbo
    $isTurbo = $request->headers->get('Turbo-Frame');
    $status = $form->isSubmitted() ? Response::HTTP_UNPROCESSABLE_ENTITY : Response::HTTP_OK;
    

    // Affiche le formulaire de modification
    return $this->render('evenements/edit.html.twig', [
        'evenement' => $evenement,
        'form' => $form->createView(),
        'is_turbo_frame' => $isTurbo
    ] , new Response(null, $status)); 
}


// src/Controller/EvenementsController.php
#[Route('/evenements/{id}', name: 'app_evenements_show', methods: ['GET'])]
public function show(Evenements $evenement): Response
{
    return $this->render('evenements/show.html.twig', [
        'evenement' => $evenement,
    ]);
}





}