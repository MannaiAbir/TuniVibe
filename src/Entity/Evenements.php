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

     
    #[ORM\Column(type: 'decimal', precision: 9, scale: 6, nullable: true)]
    private ?float $latitude = null;

    #[ORM\Column(type: 'decimal', precision: 9, scale: 6, nullable: true)]
    private ?float $longitude = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: InscriptionEvenement::class, orphanRemoval: true)]
     private Collection $inscriptions;

    public function __construct()
    {
        $this->activites = new ArrayCollection();
        $this->participants = new ArrayCollection();
        $this->inscriptions = new ArrayCollection();
    }

  



    public function getInscriptions(): Collection
     {
          return $this->inscriptions;
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

public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }
}
