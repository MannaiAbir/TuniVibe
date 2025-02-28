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

#[Route('/adminatelier')]
class AdminWorkshop extends AbstractController
{
    #[Route('/', name: 'adminatelier_index', methods: ['GET'])]
    public function index(WorkshopRepository $workshopRepository): Response
    {
        return $this->render('atelier/adminindex.html.twig', [
            'workshops' => $workshopRepository->findAll(),
        ]);
    }





    #[Route('/{id}/delete', name: 'adminatelier_delete', methods: ['POST'])]
public function delete(Workshop $workshop, EntityManagerInterface $entityManager, Request $request): Response
{
    if ($this->isCsrfTokenValid('delete'.$workshop->getId(), $request->request->get('_token'))) {
        $entityManager->remove($workshop);
        $entityManager->flush();

        $this->addFlash('success', 'Workshop supprimé avec succès.');
    }

    return $this->redirectToRoute('adminatelier_index');
}


 
}

