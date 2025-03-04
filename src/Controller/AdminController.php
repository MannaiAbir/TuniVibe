<?php

namespace App\Controller;

use App\Entity\Evenements;
use App\Entity\User;
use App\Entity\Activites;
use App\Repository\EvenementsRepository;
use App\Repository\ActivitesRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Psr\Log\LoggerInterface;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController
{
    // --------------------------------------------
    // DASHBOARD ADMIN
    // --------------------------------------------
    
    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard(
        EvenementsRepository $evenementsRepository,
        ActivitesRepository $activitesRepository,
        UserRepository $userRepository
    ): Response
    {
        // Vérification des droits d'accès
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

    }

    // --------------------------------------------
    // GESTION DES ÉVÉNEMENTS
    // --------------------------------------------

    #[Route('/adminpage/evenements', name: 'admin_evenements_index')]
    public function index(EvenementsRepository $repository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        return $this->render('admin/evenements/index.html.twig', [
            'evenements' => $repository->findAll()
        ]);
    }

    #[Route('/adminpage/evenements/{id}/delete', name: 'admin_evenements_delete', methods: ['POST'])]
    public function deleteEvent(Request $request, Evenements $evenement, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        if ($this->isCsrfTokenValid('delete' . $evenement->getId(), $request->request->get('_token'))) {
            $em->remove($evenement);
            $em->flush();
            $this->addFlash('success', 'Événement supprimé avec succès.');
        }
        
        return $this->redirectToRoute('admin_evenements_index');
    }

    #[Route('/adminpage/evenements/{id}', name: 'admin_evenements_show')]
    public function showEvenement(Evenements $evenement): Response
    {
       $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('admin/evenements/show.html.twig', [
        'evenement' => $evenement
       ]);
    }

    // --------------------------------------------
    // GESTION DES UTILISATEURS
    // --------------------------------------------

    #[Route('/adminpage/promote/{id}', name: 'admin_promote')]
    public function promoteUser(User $user, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        // Méthode promoteToAdmin() doit être définie dans l'entité User
        $user->promoteToAdmin();
        $em->flush();
        
        $this->addFlash('success', 'Utilisateur promu admin avec succès.');
        return $this->redirectToRoute('admin_dashboard');
    }

    // --------------------------------------------
    // GESTION DES ACTIVITÉS
    // --------------------------------------------

    #[Route('/adminpage/activites', name: 'admin_activites_index')]
    public function activitesIndex(ActivitesRepository $repository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('admin/activites/index.html.twig', [
            'activites' => $repository->findAll()
        ]);
    }

    #[Route('/adminpage/activites/{id}/delete', name: 'admin_activites_delete', methods: ['POST'])]
    public function activitesDelete(Request $request, Activites $activite, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        if ($this->isCsrfTokenValid('delete' . $activite->getId(), $request->request->get('_token'))) {
            $em->remove($activite);
            $em->flush();
            $this->addFlash('success', 'Activité supprimée avec succès.');
        }

        return $this->redirectToRoute('admin_activites_index');
    }

    #[Route('/edit/{id}', name: 'app_editadmin', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        // Create the form for editing the user
        $form = $this->createForm(UserType::class, $user, [
            'allow_password' => false // Cache le champ mot de passe lors de l'édition
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'User updated successfully.');
            return $this->redirectToRoute('app_adminpage');
        }
        // Render the edit form
        return $this->render('admin/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
    #[Route('/admin/delete/{id}', name: 'app_deleteadmin', methods: ['GET'])]
    public function delete(int $id, EntityManagerInterface $entityManager, LoggerInterface $logger): RedirectResponse
    {
        $logger->info('Attempting to delete user with id: ' . $id);

        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            $logger->error('User with id ' . $id . ' not found');
            throw $this->createNotFoundException('User not found.');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'User deleted successfully.');

       // Redirect back to the admin dashboard
       return $this->redirectToRoute('app_adminpage');
}


   
}





