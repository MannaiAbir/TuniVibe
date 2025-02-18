<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Question::class, cascade: ['persist', 'remove'], orphanRemoval: true)]
    private Collection $questions;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Livre $livre = null;

    /**
     * @var Collection<int, TentativeQuiz>
     */
    #[ORM\OneToMany(targetEntity: TentativeQuiz::class, mappedBy: 'quiz')]
    private Collection $tentativeQuizzes;

    public function __construct()
    {
        // Initialize the collection
        $this->questions = new ArrayCollection();
        $this->tentativeQuizzes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    // Get the collection of questions associated with the quiz
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    // Add a question to the quiz
    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setQuiz($this);  // Ensure the back reference is set
        }

        return $this;
    }

    // Remove a question from the quiz
    public function removeQuestion(Question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
            $question->setQuiz(null);  // Ensure the back reference is cleared
        }

        return $this;
    }

    public function getLivre(): ?Livre
    {
        return $this->livre;
    }

    public function setLivre(?Livre $livre): static
    {
        $this->livre = $livre;

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
            $tentativeQuiz->setQuiz($this);
        }

        return $this;
    }

    public function removeTentativeQuiz(TentativeQuiz $tentativeQuiz): static
    {
        if ($this->tentativeQuizzes->removeElement($tentativeQuiz)) {
            // set the owning side to null (unless already changed)
            if ($tentativeQuiz->getQuiz() === $this) {
                $tentativeQuiz->setQuiz(null);
            }
        }

        return $this;
    }
}
