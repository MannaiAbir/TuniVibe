<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "The question cannot be blank.")]
    #[Assert\Length(
        min: 5,
        max: 1000,
        minMessage: "The question must be at least {{ limit }} characters long.",
        maxMessage: "The question cannot be longer than {{ limit }} characters."
    )]
    private ?string $question = null;

    #[ORM\Column(type: 'json', nullable: true)]
    #[Assert\NotBlank(message: "At least one option is required.")]
    #[Assert\Count(
        min: 2,
        max: 10,
        minMessage: "You must provide at least {{ limit }} options.",
        maxMessage: "You cannot provide more than {{ limit }} options."
    )]
    private ?array $options = [];

    #[ORM\Column(type: 'string', nullable: false)]
    #[Assert\NotBlank(message: "The correct option cannot be blank.")]
    private ?string $optionCorrect = '';

    #[ORM\ManyToOne(targetEntity: Livre::class, inversedBy: 'questions')]
#[ORM\JoinColumn(name: "livre_id", referencedColumnName: "id", nullable: false)]
private ?Livre $livre = null;

    //#[ORM\OneToOne(cascade: ['persist', 'remove'])]
    //#[Assert\NotNull(message: "A livre must be selected.")]
    //private ?Livre $livre = null;

    #[ORM\ManyToOne(targetEntity: Quiz::class, inversedBy: 'questions')]
#[ORM\JoinColumn(name: "quiz_id", referencedColumnName: "id")]
private ?Quiz $quiz = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): static
    {
        $this->question = $question;
        return $this;
    }

    public function getOptions(): array
    {
        return $this->options ?? [];
    }

    public function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }

    public function getOptionCorrect(): ?string
    {
        return $this->optionCorrect;
    }

    public function setOptionCorrect(string $optionCorrect): static
    {
        if (!in_array($optionCorrect, $this->options ?? [], true)) {
            throw new \InvalidArgumentException("The correct option must be one of the available options.");
        }
        $this->optionCorrect = $optionCorrect;
        return $this;
    }

    public function addOption(string $option): self
    {
        $this->options[] = $option;
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

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): static
{
    $this->quiz = $quiz;
    if ($quiz !== null && !$quiz->getQuestions()->contains($this)) {
        $quiz->addQuestion($this);
    }
    return $this;
}

}