<?php
namespace App\Service;

use GuzzleHttp\Client;

class NYTReviewService
{
    private $client;
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->client = new Client();
        $this->apiKey = $apiKey;
    }

    public function getReviews(string $bookTitle): array
{
    try {
        $response = $this->client->request('GET', 'https://api.nytimes.com/svc/books/v3/reviews.json', [
            'query' => [
                'title' => $bookTitle,
                'api-key' => $this->apiKey,
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        // Check if the response contains reviews
        if (isset($data['results']) && is_array($data['results'])) {
            return $data;
        }

        // Return an empty array if no reviews are found
        return ['results' => []];
    } catch (\Exception $e) {
        // Log the error or handle it appropriately
        dump($e->getMessage()); // Debugging
        return ['results' => []];
    }
}
}
