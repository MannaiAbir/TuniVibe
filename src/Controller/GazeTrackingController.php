<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

final class GazeTrackingController extends AbstractController
{
    #[Route('/gaze/tracking', name: 'app_gaze_tracking')]
    public function index(): Response
    {
        return $this->render('gaze_tracking/index.html.twig', [
            'controller_name' => 'GazeTrackingController',
        ]);
    }
    #[Route('/api/gaze-tracking', name: 'api_gaze_tracking', methods: ['POST'])]
    public function gazeTracking(Request $request): JsonResponse
    {
        // Decode the JSON data from the request
        $data = json_decode($request->getContent(), true);

        // Log or process the gaze data
        $gazeDirection = $data['gaze_direction'] ?? 'unknown';
        $isBlinking = $data['is_blinking'] ?? false;
        $x = $data['x'] ?? 0;
        $y = $data['y'] ?? 0;

        // Example: Log the data (you can replace this with your logic)
        error_log("Gaze Direction: $gazeDirection, Blinking: " . ($isBlinking ? 'Yes' : 'No') . ", X: $x, Y: $y");

        // Return a JSON response
        return new JsonResponse(['status' => 'success', 'message' => 'Gaze data received']);
    }
}
