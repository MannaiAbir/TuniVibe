<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    /**
     * @var Collection<int, Telechargement>
     */
    #[ORM\OneToMany(targetEntity: Telechargement::class, mappedBy: 'user')]
    private Collection $telechargements;

    /**
     * @var Collection<int, TentativeQuiz>
     */
    #[ORM\OneToMany(targetEntity: TentativeQuiz::class, mappedBy: 'user')]
    private Collection $tentativeQuizzes;

    public function __construct()
    {
        $this->telechargements = new ArrayCollection();
        $this->tentativeQuizzes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

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
            $telechargement->setUser($this);
        }

        return $this;
    }

    public function removeTelechargement(Telechargement $telechargement): static
    {
        if ($this->telechargements->removeElement($telechargement)) {
            // set the owning side to null (unless already changed)
            if ($telechargement->getUser() === $this) {
                $telechargement->setUser(null);
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
            $tentativeQuiz->setUser($this);
        }

        return $this;
    }

    public function removeTentativeQuiz(TentativeQuiz $tentativeQuiz): static
    {
        if ($this->tentativeQuizzes->removeElement($tentativeQuiz)) {
            // set the owning side to null (unless already changed)
            if ($tentativeQuiz->getUser() === $this) {
                $tentativeQuiz->setUser(null);
            }
        }

        return $this;
    }
}
