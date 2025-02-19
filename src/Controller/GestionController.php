<?php

namespace App\Controller;
use App\Repository\EvenementsRepository;
use App\Repository\ActivitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class GestionController extends AbstractController
{
    #[Route('/gestion', name: 'app_gestion')]
    public function gestion(
        EvenementsRepository $evenementsRepository,
        ActivitesRepository $activitesRepository
    ): Response {
        return $this->render('gestion/index.html.twig', [
            'evenements' => $evenementsRepository->findAll(),
            'activites' => $activitesRepository->findAll(),
        ]);
    }
}
