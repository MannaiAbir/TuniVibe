<?php

namespace App\Controller;

use App\Entity\Workshop;
use App\Entity\Inscription;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Service\MailerService; 

#[Route('/inscription')]
class InscriptionController extends AbstractController
{









    #[Route('/{id}/rejoindre', name: 'inscription_rejoindre', methods: ['GET', 'POST'])]
    public function rejoindre(Workshop $workshop, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();
    
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour rejoindre un workshop.');
            return $this->redirectToRoute('app_login');
        }
    
        $existingInscription = $entityManager->getRepository(Inscription::class)->findOneBy([
            'user' => $user,
            'workshop' => $workshop
        ]);
    
        if ($existingInscription) {
            $this->addFlash('warning', 'Vous avez déjà demandé à rejoindre ce workshop.');
        } else {
            $inscription = new Inscription();
            $inscription->setUser($user);
            $inscription->setWorkshop($workshop);
            $inscription->setStatut('en attente');  // Statut en attente par défaut
    
            $entityManager->persist($inscription);
            $entityManager->flush();
    
            $this->addFlash('success', 'Votre demande a inscrire a été envoyée avec succès !');
        }
    
        return $this->redirectToRoute('atelier_index', ['id' => $workshop->getId()]);
    }
    







    #[Route('/{id}/inscriptions', name: 'inscription_liste')]
    public function afficherInscriptions(Workshop $workshop): Response
    {
        // Vérification si l'utilisateur est bien l'éditeur de l'atelier
        if ($this->getUser() !== $workshop->getUser()) {
            throw $this->createAccessDeniedException("Vous n'avez pas accès à cette page.");
        }

        // Récupérer les inscriptions et les afficher
        return $this->render('workshop\inscriptions.html.twig', [
            'workshop' => $workshop,
            'inscriptions' => $workshop->getInscriptions()
        ]);
    }









    #[Route('/{id}/statut/{statut}', name: 'inscription_statut')]
 public function changerStatut(Inscription $inscription, string $statut, EntityManagerInterface $em): Response
    {
        // Vérification du statut passé en paramètre
        if (!in_array($statut, ['accepté', 'refusé'])) {
            throw $this->createNotFoundException("Statut invalide.");
        }

        // Mise à jour du statut de l'inscription
        $inscription->setStatut($statut);
        $em->flush();



        // Redirection vers la page des inscriptions de l'atelier
        return $this->redirectToRoute('inscription_liste', ['id' => $inscription->getWorkshop()->getId()]);
    }










#[Route('/{id}/annuler', name: 'inscription_annuler', methods: ['POST'])]
public function annuler(Workshop $workshop, EntityManagerInterface $entityManager, Security $security): Response
{
    $user = $security->getUser();

    if (!$user) {
        $this->addFlash('error', 'Vous devez être connecté pour annuler votre inscription.');
        return $this->redirectToRoute('app_login');
    }

    $inscription = $entityManager->getRepository(Inscription::class)->findOneBy([
        'user' => $user,
        'workshop' => $workshop
    ]);

    if ($inscription) {
        $entityManager->remove($inscription);
        $entityManager->flush();

        $this->addFlash('success', 'Votre inscription a été annulée.');
    } else {
        $this->addFlash('warning', 'Vous n\'êtes pas inscrit à ce workshop.');
    }

    return $this->redirectToRoute('atelier_index');
}






}
