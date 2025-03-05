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
    public function index(UserRepository $userRepository): Response
    {
        // Fetch all users
        $users = $userRepository->findAll();

        // Render the user list
        return $this->render('admin/show.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/edituser/{id}', name: 'app_edituser', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        // Create the form for editing the user
        $form = $this->createForm(UserType::class, $user, [
            'allow_password' => false // Cache le champ mot de passe lors de l'édition
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        try {
            $entityManager->flush();
            $this->addFlash('success', 'User updated successfully.');
            return $this->redirectToRoute('app_adminpage');
        } 
        catch (UniqueConstraintViolationException $e) {
            $flashBag->add('error', 'L\'email existe déjà. Veuillez en choisir un autre.');
        }
            
        }
        // Render the edit form
        return $this->render('admin/edituser.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/deleteadmin/{id}', name: 'app_deleteadmin', methods: ['GET'])]
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