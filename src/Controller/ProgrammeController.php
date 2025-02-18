<?php
namespace App\Controller;

use App\Entity\Programme;
use App\Form\ProgrammeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Hebergement;

class ProgrammeController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    // Injecter l'EntityManager dans le constructeur
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // Ajouter un nouveau programme
    #[Route('/programme/new/{hebergementId}', name: 'programme_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, $hebergementId): Response
    {
        // Récupérer l'hébergement associé (par son ID)
        $hebergement = $entityManager->getRepository(Hebergement::class)->find($hebergementId);

        // Vérifier si l'hébergement existe
        if (!$hebergement) {
            throw $this->createNotFoundException('Hébergement non trouvé');
        }

        // Créer une nouvelle instance de Programme
        $programme = new Programme();
        
        // Associer l'hébergement au programme
        $programme->setHebergement($hebergement);

        // Créer le formulaire lié à l'entité Programme
        $form = $this->createForm(ProgrammeType::class, $programme);

        // Traiter la soumission du formulaire
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide, enregistrer le programme
        if ($form->isSubmitted() && $form->isValid()) {
            // Persister le programme dans la base de données
            $entityManager->persist($programme);
            $entityManager->flush();

            // Rediriger vers la page de l'hébergement associé après l'ajout
            return $this->redirectToRoute('hebergement_show', [
                'idhebergement' => $hebergement->getIdhebergement()
            ]);
        }

        // Rendu du formulaire dans le template
        return $this->render('programme/new.html.twig', [
            'form' => $form->createView(),
            'hebergement' => $hebergement, // Passez l'hébergement à la vue
        ]);
        
    }


    // Modifier un programme
    #[Route('/programme/edit/{id}', name: 'programme_edit')]
    public function edit(Request $request, Programme $programme): Response
    {
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('hebergement_show', [
                'idhebergement' => $programme->getHebergement()->getIdhebergement()
            ]);
        }

        return $this->render('programme/edit.html.twig', [
            'form' => $form->createView(),
            'programme' => $programme,
        ]);
    }

    // Supprimer un programme
    #[Route('/programme/delete/{id}', name: 'programme_delete')]
    public function delete(Programme $programme): Response
    {
        $hebergementId = $programme->getHebergement()->getIdhebergement();

        $this->entityManager->remove($programme);
        $this->entityManager->flush();

        return $this->redirectToRoute('hebergement_show', ['idhebergement' => $hebergementId]);
    }
}
