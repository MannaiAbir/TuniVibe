<?php

// src/Controller/WorkshopController.php

namespace App\Controller;

use App\Entity\Workshop;
use App\Form\WorkshopType;
use App\Repository\WorkshopRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/atelier')]
class Atelier extends AbstractController
{
    #[Route('/', name: 'atelier_index', methods: ['GET'])]
    public function index(WorkshopRepository $workshopRepository): Response
    {

        $user = $this->getUser(); // Récupère l'utilisateur connecté

        // Exclure les workshops de l'utilisateur connecté
        $workshops = $workshopRepository->createQueryBuilder('w')
            ->where('w.user != :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
            
        return $this->render('atelier/index.html.twig', [
            'workshops' => $workshopRepository->findAll(),
        ]);
    }



    #[Route('/{id}', name: 'atelier_show', methods: ['GET'])]
    public function show(Workshop $workshop): Response
    {
        return $this->render('atelier/show.html.twig', [
            'workshop' => $workshop,
        ]);
    }



    
 
}

