<?php

// src/Controller/WorkshopController.php

namespace App\Controller;

use App\Entity\Workshop;
use App\Entity\User;
use App\Form\WorkshopType;
use App\Repository\WorkshopRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/workshop')]
class WorkshopController extends AbstractController
{
    #[Route('/', name: 'workshop_index', methods: ['GET'])]
    public function index(WorkshopRepository $workshopRepository): Response
    {
        $user = $this->getUser(); // Récupérer l'utilisateur connecté
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir vos workshops.');
        }
    
        // Récupérer uniquement les workshops de l'utilisateur connecté
        $workshops = $workshopRepository->findByUser($user);

    
        return $this->render('workshop/index.html.twig', [
            'workshops' => $workshops,
        ]);
    }
    


    
    #[Route('/new', name: 'workshop_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser(); // Récupère l'utilisateur connecté

        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour créer un workshop.');
        }
    
        $workshop = new Workshop();
        $workshop->setUser($user); // Associe l'utilisateur au workshop
    
        $form = $this->createForm(WorkshopType::class, $workshop);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('image')->getData();
    
            if ($file) {
                $filename = uniqid().'.'.$file->guessExtension();
                try {
                    $file->move($this->getParameter('images_directory'), $filename);
                    $workshop->setImage($filename);
                } catch (FileException $e) {
                    // Gérer l'erreur, par exemple en loggant
                }
            }
    
            // ✅ Utilisation correcte de l'EntityManager
            $entityManager->persist($workshop);
            $entityManager->flush();
    
            return $this->redirectToRoute('workshop_index');
        }
    
        return $this->render('workshop/new.html.twig', [
            'workshop' => $workshop,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'workshop_show', methods: ['GET'])]
    public function show(Workshop $workshop): Response
    {
        return $this->render('workshop/show.html.twig', [
            'workshop' => $workshop,
        ]);
    }

    #[Route('/{id}/edit', name: 'workshop_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Workshop $workshop, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() !== $workshop->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres workshops.');
        }
    
        $form = $this->createForm(WorkshopType::class, $workshop);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('workshop_index');
        }
    
        return $this->render('workshop/edit.html.twig', [
            'workshop' => $workshop,
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/{id}', name: 'workshop_delete', methods: ['POST'])]
    public function delete(Request $request, Workshop $workshop, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() !== $workshop->getUser()) {
            throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres workshops.');
        }
    
        if ($this->isCsrfTokenValid('delete' . $workshop->getId(), $request->request->get('_token'))) {
            $entityManager->remove($workshop);
            $entityManager->flush();
        }
    
        return $this->redirectToRoute('workshop_index');
    }
    





}
