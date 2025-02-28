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
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Firebase\JWT\JWT;

#[Route('/seance')]
class SeanceController extends AbstractController
{
    private $httpClient;
    private $templateId;
    private $access_key;
    private $secret_key;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
        $this->templateId = "67bf93944b6eb78daeed787b"; // Remplace par ton Template ID
        $this->access_key = "67bdec2c4944f067313a8f0f";
        $this->secret_key = "IWgapr4A9nVV9OYOmQEJ_SGwQsZkIlq4EBi8KDZcxTJo2HgjZ0OyS-TRKtb1IrFXV-VEzuqhZXhrCt75J-UA1fxTqipLI9_HdEmyAHaSZg9lzTRvUglqjkqbVYeayRCveyfZSDtINOTd2qo_LbMWLUHXmaPpK5XrC6URSlsuEbU=";
    }

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

            $response = $this->httpClient->request('POST', 'https://api.100ms.live/v2/rooms', [
                'headers' => [
                    'Authorization' => "Bearer " . $this->generateManagementToken(),
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'template_id' => $this->templateId
                ],
            ]);
            
            $data = $response->toArray();

            $seance->setRoomId($data["id"]);
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

    #[Route('/livestreaming/{id}', name: 'livestreaming_seance', methods: ['GET'])]
    public function livestreaming(Seance $seance, Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['error' => 'Utilisateur non connecté'], 401);
        }   
        
        $user_id = $user->getId();
        $username = $user->getUsername();
        $roles = $user->getRoles();
        $role = (in_array("ROLE_EDITOR", $roles) ? "host" : "participant");
        $user_token = $this->generateStreamingToken($seance->getRoomId(), (string)$user_id, $role);

        return $this->render('seance/liveStream.html.twig', [
            'seance' => $seance,
            'username' => $username,
            'token' => $user_token,
            "template_subdomain" => "guesmi-ameni"
        ]);
    }

    public function generateStreamingToken(string $roomId, string $userId, string $role): string
    {
        $currentTime = time() - 10;

        $payload = [
            'access_key' => $this->access_key,
            'room_id'    => $roomId,
            'user_id'    => $userId,
            'role'       => $role,
            'type'       => 'app',
            'version'    => 2,
            'iat'        => $currentTime,
            'nbf'        => $currentTime - 60,
            'exp'        => $currentTime + 7200,
            'jti'        => bin2hex(random_bytes(16)), // Générer un UUID unique
        ];

        return JWT::encode($payload, $this->secret_key, 'HS256');
    }

    public function generateManagementToken(): string
    {
        $currentTime = time() - 10;

        $payload = [
            'access_key' => $this->access_key,
            'type'       => 'management',
            'version'    => 2,
            'iat'        => $currentTime,
            'nbf'        => $currentTime - 60,
            'exp'        => $currentTime + 7200,
            'jti'        => bin2hex(random_bytes(16)), // Génère un UUID unique
        ];

        return JWT::encode($payload, $this->secret_key, 'HS256');
    }
}
