<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Form\UserType;

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/acceuil', name: 'app_acceuil')]
    public function home(): Response
    {
        return $this->render('home/acceuil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    #[Route('/adminpage', name: 'app_adminpage')]
    public function adminpage(UserRepository $userRepository): Response
    {
                // Fetch all users
                $users = $userRepository->findAll();

              
                  

        return $this->render('home/adminpage.html.twig', [
            'controller_name' => 'HomeController',
            'users' => $users,
        ]);
    }

}