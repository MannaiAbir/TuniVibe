<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\EvenementsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvenementsRepository::class)]
#[ORM\Table(name: 'evenement')]
class Evenements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le titre est obligatoire")]
    #[Assert\Length(
        min: 5,
        max: 100,
        minMessage: "Le titre doit faire au moins {{ limit }} caractères",
        maxMessage: "Le titre ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $titre = null;


    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;
    

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu = null;

    #[ORM\Column(type: 'string',length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isVisible = true;

    #[ORM\ManyToMany(targetEntity: Activites::class, inversedBy: 'evenements')]
    private Collection $activites;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'participatedEvents')]
    #[ORM\JoinTable(name: 'evenement_participation')]
    private Collection $participants;

    public function __construct()
    {
        $this->activites = new ArrayCollection();
        $this->participants = new ArrayCollection();
    }

    


    // Getters et setters générés automatiquement
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): static
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): static
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function isVisible(): bool
{
    return $this->isVisible;
}

public function setIsVisible(bool $isVisible): self
{
    $this->isVisible = $isVisible;
    return $this;
}

// Activites methods
public function getActivites(): Collection
{
    return $this->activites;
}

public function addActivite(Activites $activite): self
{
    if (!$this->activites->contains($activite)) {
        $this->activites->add($activite);
        $activite->setEvenement($this);
    }
    return $this;
}

public function removeActivite(Activites $activite): self
{
    if ($this->activites->removeElement($activite)) {
       
            $activite->setEvenement(null);
        
    }
    return $this;
}

// Participants methods
public function getParticipants(): Collection
{
    return $this->participants;
}

public function addParticipant(User $user): self
{
    if (!$this->participants->contains($user)) {
        $this->participants[] = $user;
    }
    return $this;
}

public function removeParticipant(User $user): self
{
    $this->participants->removeElement($user);
    return $this;
}
}
