<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

use App\Repository\UserRepository;
use App\Repository\HebergementRepository;
use App\Repository\ProgrammeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController
{
    #[Route('/adminhebergement', name: 'adminhebergement')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(
        UserRepository $userRepository,
        HebergementRepository $hebergementRepository,
        ProgrammeRepository $programmeRepository
    ): Response {
        // Récupérer tous les utilisateurs
        $users = $userRepository->findAll();

        // Récupérer tous les hébergements
        $hebergements = $hebergementRepository->findAll();

        // Récupérer tous les programmes
        $programmes = $programmeRepository->findAll();

        // Passer les données à la vue
        return $this->render('adminhebergement/index.html.twig', [
            'users' => $users,
            'hebergements' => $hebergements,
            'programmes' => $programmes,
        ]);
  }

  #[Route('/adminhebergement/detail/{id}', name: 'admin_detail_hebergement')]
  public function detailHebergement(User $user): Response
  {
      return $this->render('adminhebergement/detailhebergement.html.twig', [
          'user' => $user,
          'hebergements' => $user->getHebergements(),
      ]);
  }
    

    #[Route('/adminhebergement/delete/{id}', name: 'admin_delete_hebergement', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function deleteHebergement(int $id, HebergementRepository $hebergementRepository): Response
    {
        $hebergement = $hebergementRepository->find($id);
        
        if ($hebergement) {
            // Supprimer l'hébergement
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hebergement);
            $entityManager->flush();
            
            $this->addFlash('success', 'Hébergement supprimé avec succès!');
        } else {
            $this->addFlash('error', 'Hébergement non trouvé!');
        }

        return $this->redirectToRoute('adminhebergement');
    }


    #[Route('/adminhebergement/show_program/{id}', name: 'admin_show_program', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function showProgramme(int $id, ProgrammeRepository $programmeRepository): Response
    {
        // Récupérer les programmes associés à cet hébergement
        $programmes = $programmeRepository->findBy(['hebergement' => $id]);

        return $this->render('adminhebergement/show_program.html.twig', [
            'programmes' => $programmes,
        ]);
    }



    #[Route('/edit/{id}', name: 'app_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        // Create the form for editing the user
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // Handle form submission
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush(); // Save changes to the database
            $this->addFlash('success', 'User updated successfully.');
            return $this->redirectToRoute('app_admin');
        }

        // Render the edit form
        return $this->render('admin/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/delete/{id}', name: 'app_delete', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(int $id, EntityManagerInterface $entityManager, LoggerInterface $logger): RedirectResponse
    {
        // Debugging: Log the id to see if it's passed correctly
        $logger->info('Attempting to delete user with id: ' . $id);

        // Find the user by id
        $user = $entityManager->getRepository(User::class)->find($id);

        // Check if the user exists
        if (!$user) {
            // If the user does not exist, log the error and throw an exception
            $logger->error('User with id ' . $id . ' not found');
            throw $this->createNotFoundException('User not found.');
        }

        // Remove the user from the database
        $entityManager->remove($user);
        $entityManager->flush(); // Commit the deletion

        // Add a success message
        $this->addFlash('success', 'User deleted successfully.');

        // Redirect back to the admin dashboard
        return $this->redirectToRoute('app_admin');
    }
}