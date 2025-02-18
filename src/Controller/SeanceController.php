<?php

namespace App\Controller;

use App\Entity\Seance;
use App\Entity\Workshop;
use App\Form\SeanceType;
use App\Repository\SeanceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/seance')]
class SeanceController extends AbstractController
{
    #[Route('/new/{id}', name: 'seance_new')]
    public function new(Workshop $workshop, Request $request, EntityManagerInterface $entityManager): Response
    {
        $seance = new Seance();
        $seance->setWorkshop($workshop);
    
        // 🚀 Passer le workshop au formulaire
        $form = $this->createForm(SeanceType::class, $seance, [
            'workshop' => $workshop,
        ]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($seance);
            $entityManager->flush();
    
            return $this->redirectToRoute('workshop_show', ['id' => $workshop->getId()]);
        }
    
        return $this->render('seance/new.html.twig', [
            'workshop' => $workshop, // 🔹 Passer workshop à la vue aussi
            'form' => $form->createView(),
        ]);
    }
    
    

    #[Route('/{id}/edit', name: 'seance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Seance $seance, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SeanceType::class, $seance);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
    
            return $this->redirectToRoute('workshop_show', ['id' => $seance->getWorkshop()->getId()]);
        }
    
        return $this->render('seance/edit.html.twig', [
            'form' => $form->createView(),
            'seance' => $seance,
        ]);
    }
    

    #[Route('/delete/{id}', name: 'seance_delete', methods: ['POST'])]
    public function delete(Seance $seance, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $seance->getId(), $request->request->get('_token'))) {
            $entityManager->remove($seance);
            $entityManager->flush();
        }

        return $this->redirectToRoute('workshop_show', ['id' => $seance->getWorkshop()->getId()]);
    }
}
