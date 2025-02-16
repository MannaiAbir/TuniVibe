<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UserRepository;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(UserRepository $userRepository): Response
    {
        // Fetch the user data (e.g., the currently logged-in user)
        $user = $this->getUser();

        // If you want to fetch a specific user by ID, use:
        // $user = $userRepository->find($id);

        // Pass the user variable to the template
        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }
}