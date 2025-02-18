<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EditorController extends AbstractController
{
    #[Route('/editor', name: 'app_editor')]
    #[IsGranted('ROLE_EDITOR')]
    public function index(): Response
    {
        // Get the currently logged-in user
        $user = $this->getUser();

        // Pass the user to the template
        return $this->render('editor/index.html.twig', [
            'user' => $user,
        ]);
    }
}
