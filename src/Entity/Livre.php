<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $auteur = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $fichierUrl = null;

    #[ORM\OneToOne(targetEntity: Quiz::class, mappedBy: 'livre', cascade: ['persist', 'remove'])]
    private ?Quiz $quiz = null;





    #[ORM\Column(length: 255)]
    private ?string $genre = null;

    /**
     * @var Collection<int, Telechargement>
     */
    #[ORM\OneToMany(targetEntity: Telechargement::class, mappedBy: 'livre')]
    private Collection $telechargements;

    /**
     * @var Collection<int, TentativeQuiz>
     */
    #[ORM\OneToMany(targetEntity: TentativeQuiz::class, mappedBy: 'livre')]
    private Collection $tentativeQuizzes;

    #[ORM\Column(length: 255)]
    private ?string $imageCouverture = null;

    #[ORM\OneToMany(mappedBy: 'livre', targetEntity: Question::class, cascade: ['remove'])]
    private Collection $questions;

    /**
     * @var Collection<int, Review>
     */
    #[ORM\OneToMany(targetEntity: Review::class, mappedBy: 'livre')]
    private Collection $reviews;

    public function __construct()
    {
        $this->telechargements = new ArrayCollection();
        $this->tentativeQuizzes = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->reviews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): static
    {
        $this->auteur = $auteur;

        return $this;
    }

    // In Livre entity
public function getQuiz(): ?Quiz
{
    // Get the first associated quiz from the related questions
    foreach ($this->getQuestions() as $question) {
        if ($question->getQuiz()) {
            return $question->getQuiz();
        }
    }
    return null; // Return null if no quiz is found
}

    public function setQuiz(?Quiz $quiz): self
    {
        $this->quiz = $quiz;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getFichierUrl(): ?string
    {
        return $this->fichierUrl;
    }

    public function setFichierUrl(string $fichierUrl): static
    {
        $this->fichierUrl = $fichierUrl;

        return $this;
    }



    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(string $genre): static
    {
        $this->genre = $genre;

        return $this;
    }

    public function getQuestions(): Collection
{
    return $this->questions;
}
public function addQuestion(Question $question): self
{
    if (!$this->questions->contains($question)) {
        $this->questions[] = $question;
        $question->setLivre($this);
    }

    return $this;
}
public function removeQuestion(Question $question): self
{
    if ($this->questions->removeElement($question)) {
        // Set the owning side to null (unless already changed)
        if ($question->getLivre() === $this) {
            $question->setLivre(null);
        }
    }

    return $this;
}

    /**
     * @return Collection<int, Telechargement>
     */
    public function getTelechargements(): Collection
    {
        return $this->telechargements;
    }

    public function addTelechargement(Telechargement $telechargement): static
    {
        if (!$this->telechargements->contains($telechargement)) {
            $this->telechargements->add($telechargement);
            $telechargement->setLivre($this);
        }

        return $this;
    }

    public function removeTelechargement(Telechargement $telechargement): static
    {
        if ($this->telechargements->removeElement($telechargement)) {
            // set the owning side to null (unless already changed)
            if ($telechargement->getLivre() === $this) {
                $telechargement->setLivre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TentativeQuiz>
     */
    public function getTentativeQuizzes(): Collection
    {
        return $this->tentativeQuizzes;
    }

    public function addTentativeQuiz(TentativeQuiz $tentativeQuiz): static
    {
        if (!$this->tentativeQuizzes->contains($tentativeQuiz)) {
            $this->tentativeQuizzes->add($tentativeQuiz);
            $tentativeQuiz->setLivre($this);
        }

        return $this;
    }

    public function removeTentativeQuiz(TentativeQuiz $tentativeQuiz): static
    {
        if ($this->tentativeQuizzes->removeElement($tentativeQuiz)) {
            // set the owning side to null (unless already changed)
            if ($tentativeQuiz->getLivre() === $this) {
                $tentativeQuiz->setLivre(null);
            }
        }

        return $this;
    }

    public function getImageCouverture(): ?string
    {
        return $this->imageCouverture;
    }

    public function setImageCouverture(string $imageCouverture): static
    {
        $this->imageCouverture = $imageCouverture;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): static
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews->add($review);
            $review->setLivre($this);
        }

        return $this;
    }

    public function removeReview(Review $review): static
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getLivre() === $this) {
                $review->setLivre(null);
            }
        }

        return $this;
    }
}