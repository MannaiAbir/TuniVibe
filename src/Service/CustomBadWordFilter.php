<?php
namespace App\Service;

class CustomBadWordFilter
{
    private $badWords;

    public function __construct()
    {
        // Liste de mots inappropriés
        $this->badWords = ['mot', 'test']; // Remplace ces mots par des mots réels
    }

    public function isProfane(string $content): bool
    {
        foreach ($this->badWords as $badWord) {
            if (stripos($content, $badWord) !== false) {
                return true; // Mot inapproprié trouvé
            }
        }
        return false; // Aucun mot inapproprié
    }

    public function filterContent(string $content): string
    {
        foreach ($this->badWords as $badWord) {
            $content = str_ireplace($badWord, '****', $content);
        }
        return $content;
    }
}
