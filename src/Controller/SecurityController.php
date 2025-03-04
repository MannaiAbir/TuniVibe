<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, redirige-le en fonction de son rôle
        if ($this->getUser()) {
            return $this->redirectToRoute($this->getRedirectRouteBasedOnRole());
        }

        // Récupère l'erreur de connexion si elle existe
        $error = $authenticationUtils->getLastAuthenticationError();
        // Récupère le dernier nom d'utilisateur saisi
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * Détermine la route de redirection en fonction du rôle de l'utilisateur.
     */
    private function getRedirectRouteBasedOnRole(): string
    {
        $user = $this->getUser();

        // Vérifie si l'utilisateur a le rôle ROLE_ADMIN
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return 'app_admin'; // Route pour les admins
        }
        // Vérifie si l'utilisateur a le rôle ROLE_EDITOR
        if (in_array('ROLE_EDITOR', $user->getRoles())) {
            return 'app_editor'; // Route pour les éditeurs
        }
        // Retourne la route pour les utilisateurs réguliers (si nécessaire)
        return 'app_user'; // Route pour les utilisateurs réguliers
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('Cette méthode est interceptée par la clé de déconnexion sur ton pare-feu.');
    }
}
