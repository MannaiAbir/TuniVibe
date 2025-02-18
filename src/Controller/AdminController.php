<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

final class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin', methods: ['GET'])]
    ##[IsGranted('ROLE_ADMIN')]
    public function index(UserRepository $userRepository): Response
    {
        // Fetch all users
        $users = $userRepository->findAll();

        // Render the admin dashboard
        return $this->render('admin/show.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/edit/{id}', name: 'app_edit', methods: ['GET', 'POST'])]
    ##[IsGranted('ROLE_ADMIN')]
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
    ##[IsGranted('ROLE_ADMIN')]
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