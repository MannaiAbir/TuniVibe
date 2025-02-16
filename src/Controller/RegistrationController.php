<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType; 
use Psr\Log\LoggerInterface;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Check if the username or email already exists
            $existingUser = $entityManager->getRepository(User::class)->findOneBy([
                'username' => $user->getUsername(),
            ]);

            if ($existingUser) {
                // Add a flash message and redirect back to the registration form
                $this->addFlash('error', 'Username already exists. Please choose a different username.');
                return $this->redirectToRoute('app_register');
                
            }

            // Encode the plain password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword(
                $userPasswordHasher->hashPassword($user, $plainPassword)
            );

            // Set roles from the form (if provided)
            $roles = $form->get('roles')->getData();
            if ($roles) {
                $user->setRoles($roles);
            }

            // Validate the user entity before persisting
            $errors = $validator->validate($user);
            if (count($errors) > 0) {
                // Handle validation errors (e.g., display them to the user)
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                return $this->redirectToRoute('app_register');
            }

            // Persist the user to the database
            $entityManager->persist($user);
            $entityManager->flush();

            // Add a success message and redirect to a different route (e.g., login)
            $this->addFlash('success', 'Registration successful! You can now log in.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

}

