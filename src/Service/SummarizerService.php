<?php

namespace App\Service;

class SummarizerService
{
    private $apiToken;

    public function __construct(string $apiToken)
    {
        $this->apiToken = $apiToken;
    }

    public function summarizeText(string $text, string $summaryLength = 'short', string $outputLanguage = 'en'): string
    {
        $url = 'https://api.apyhub.com/ai/summarize-text';
        $data = [
            'text' => $text,
            'summary_length' => $summaryLength,
            'output_language' => $outputLanguage
        ];

        // Convertir les données en JSON
        $jsonData = json_encode($data);

        // Initialiser cURL
        $ch = curl_init($url);

        // Configurer cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Retourner la réponse
        curl_setopt($ch, CURLOPT_POST, true);  // Méthode POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);  // Les données à envoyer
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'apy-token: ' . $this->apiToken
        ]);

        // Exécuter la requête
        $response = curl_exec($ch);

        // Vérifier si cURL a rencontré une erreur
        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            return "Erreur lors de la récupération du résumé : $error";
        }

        // Fermer la connexion cURL
        curl_close($ch);

        // Décoder la réponse JSON
        $data = json_decode($response, true);

        // Vérifier si la réponse est valide et renvoyer le résumé
        if (isset($data['data']['summary'])) {
            return $data['data']['summary'];
        } else {
            return "Erreur dans la réponse de l'API.";
        }
    }
}

?>
