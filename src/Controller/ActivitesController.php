<?php
namespace App\Controller;

use App\Entity\Activites;
use App\Form\ActivitesType;
use App\Repository\ActivitesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivitesController extends AbstractController
{
    #[Route('/activites', name: 'app_activites_index', methods: ['GET'])]
    public function index(ActivitesRepository $activitesRepository): Response
    {
        return $this->render('activites/index.html.twig', [
            'activites' => $activitesRepository->findAll(),
        ]);
    }

    #[Route('/activites/new', name: 'app_activites_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activite = new Activites();
        $form = $this->createForm(ActivitesType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($activite);
            $entityManager->flush();

            return $this->redirectToRoute('app_activites_index');
        }

        return $this->render('activites/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/activites/{id}', name: 'app_activites_delete', methods: ['POST'])]
    public function delete(Request $request, Activites $activite, EntityManagerInterface $entityManager): Response
    {
        // Vérifier que le token CSRF est valide
        if ($this->isCsrfTokenValid('delete'.$activite->getId(), $request->request->get('_token'))) {
            // Supprimer l'activité
             $entityManager->remove($activite);
             $entityManager->flush();
        } 

             // Rediriger vers la liste des activités
             return $this->redirectToRoute('app_activites_index', [], Response::HTTP_SEE_OTHER);

    }

    #[Route('/activites/{id}/edit', name: 'app_activites_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Activites $activite, EntityManagerInterface $entityManager): Response
{
    // Créer le formulaire de modification
    $form = $this->createForm(ActivitesType::class, $activite);
    $form->handleRequest($request);

    // Traiter la soumission du formulaire
    if ($form->isSubmitted() && $form->isValid()) {
        // Enregistrer les modifications dans la base de données
        $entityManager->flush();

        // Rediriger vers la liste des activités
        return $this->redirectToRoute('app_activites_index', [], Response::HTTP_SEE_OTHER);
    }

    // Afficher le formulaire de modification
    return $this->render('activites/edit.html.twig', [
        'activite' => $activite,
        'form' => $form->createView(),
    ]);
}

#[Route('/activites/{id}/name', name: 'app_activites_get_name', methods: ['GET'])]
public function getActivityName(Activites $activite): Response
{
    return new Response($activite->getNom());
}


#[Route('/activites/list', name: 'app_activites_list', methods: ['GET'])]
public function list(ActivitesRepository $activitesRepository): JsonResponse
{
    $activites = $activitesRepository->findAll();
    $data = [];

    foreach ($activites as $activite) {
        $data[] = [
            'id' => $activite->getId(),
            'nom' => $activite->getNom(),
        ];
    }

    return new JsonResponse($data);
}


}