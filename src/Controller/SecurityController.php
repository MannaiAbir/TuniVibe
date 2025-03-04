<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // If the user is already logged in, redirect them to their respective page
        if ($this->getUser()) {
            return $this->redirectToRoute($this->getRedirectRouteBasedOnRole());
        }
    
        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // Get the last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
    
        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
    
    /**
     * Determine the redirect route based on the user's role.
     */
    private function getRedirectRouteBasedOnRole(): string
    {
        $user = $this->getUser();
    
        // Check if the user has the ROLE_ADMIN
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return 'app_adminpage'; // Route for the admin
        }
          // Check if the user has the ROLE_EDITOR
         if (in_array('ROLE_EDITOR', $user->getRoles())) {
             return 'app_editor'; // Route for the editor
        }   
        // Default route for regular users
        return 'app_user'; // Route for regular users
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
}