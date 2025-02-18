<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Repository\HebergementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/gestionhebergement')]
class GestionHebergementController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Affiche la liste de tous les hébergements
     */
    #[Route('/', name: 'gestionhebergement_index', methods: ['GET'])]
    public function index(HebergementRepository $hebergementRepository): Response
    {
        // Récupérer tous les hébergements accessibles à tous les utilisateurs
        $hebergements = $hebergementRepository->findAll();

        return $this->render('gestionhebergement/index.html.twig', [
            'hebergements' => $hebergements,
        ]);
    }

    /**
     * Affiche les détails d'un hébergement spécifique
     */
    #[Route('/{idhebergement}', name: 'gestionhebergement_show', methods: ['GET'])]
   
    public function show(Hebergement $hebergement): Response
    {
        return $this->render('gestionhebergement/show.html.twig', [
            'hebergement' => $hebergement,
        ]);
    }
}
