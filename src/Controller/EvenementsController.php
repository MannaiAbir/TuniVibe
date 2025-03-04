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
use App\Entity\InscriptionEvenement; 
use App\Form\InscriptionEvenementType;
use App\Repository\InscriptionEvenementRepository;


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

            // Notification spécifique pour la création
        $this->addFlash('success', 'Nouvel événement créé avec succès !');
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
        $this->addFlash('warning', 'L\'événement a été supprimé définitivement.');
        } else {
        $this->addFlash('danger', 'Erreur de sécurité lors de la suppression.');
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
           // Notification spécifique pour la modification
        $this->addFlash('info', 'Les modifications de l\'événement ont été enregistrées.');


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

    $event = [
        'name'      => $evenement->getTitre(),
        'latitude'  => $evenement->getLatitude(),
        'longitude' => $evenement->getLongitude()
    ];
    return $this->render('evenements/show.html.twig', [
        'evenement' => $evenement,
        'event'     => $event

    ]);
}


#[Route('/evenement/{id}/rejoindre', name: 'app_rejoindre_evenement')]
public function rejoindreEvenement(
    Request $request,
    Evenements $evenement,
    EntityManagerInterface $entityManager
): Response {
    $inscription = new InscriptionEvenement();
    $inscription->setEvenement($evenement);
// code ajouter maintenant 
    $user = $this->getUser();
    $inscription->setUser($user);

    $form = $this->createForm(InscriptionEvenementType::class, $inscription);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager->persist($inscription);
        $entityManager->flush();

        $this->addFlash('success', 'Votre inscription à l\'événement a été confirmée !');
        return $this->redirectToRoute('app_evenements_public');
    }

    return $this->render('evenements/rejoindre.html.twig', [
        'form' => $form->createView(),
        'evenement' => $evenement
    ]);
}


#[Route('/events/search', name: 'event_ajax_search')]
public function ajaxSearch(Request $request, EvenementsRepository $repository): Response
{
    $filters = [
        'titre' => $request->query->get('titre'),
        'dateDebut' => $request->query->get('dateDebut'),
        'lieu' => $request->query->get('lieu')
    ];

    $events = $repository->advancedSearch($filters);

    return $this->render('evenements/_events_list.html.twig', [
        'evenements' => $events
    ]);
}

#[Route('/evenements/{id}/users', name: 'app_evenements_users', methods: ['GET'])]
public function users(
    Evenements $evenement,
    InscriptionEvenementRepository $inscriptionRepository
): Response {
    // Récupère les utilisateurs inscrits à cet événement
    $users = $inscriptionRepository->findBy(['evenement' => $evenement]);

    return $this->render('evenements/users.html.twig', [
        'evenement' => $evenement,
        'users' => $users,
    ]);
}





}

