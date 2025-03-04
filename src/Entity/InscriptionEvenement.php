<?php

namespace App\Entity;

use App\Repository\InscriptionEvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: InscriptionEvenementRepository::class)]
#[ORM\Table(name: 'inscription_evenement')]
class InscriptionEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Evenements::class, inversedBy: 'inscriptions')]
    #[ORM\JoinColumn(name: 'evenement_id', nullable: false)]
    private ?Evenements $evenement = null;

    #[ORM\Column(name: 'nom_complet', length: 255)]
    #[Assert\NotBlank(message: "Le nom complet est obligatoire")]
    private ?string $nomComplet = null;

    #[ORM\Column(name: 'date_naissance', type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: "La date de naissance est obligatoire")]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column(name: 'profession', length: 255)]
    #[Assert\NotBlank(message: "La profession est obligatoire")]
    private ?string $profession = null;

    #[ORM\Column(name: 'taille_tshirt', length: 10, nullable: true)]
    private ?string $tailleTshirt = null;

    #[ORM\Column(name: 'activite_groupe', length: 20, nullable: true)]
    private ?string $activiteGroupe = null;

    #[ORM\Column(name: 'competences', type: Types::TEXT, nullable: true)]
    private ?string $competences = null;

    #[ORM\Column(name: 'regimes_alimentaires', type: Types::JSON, nullable: true)]
    private array $regimesAlimentaires = [];

    #[ORM\Column(name: 'accessibilite', type: Types::TEXT, nullable: true)]
    private ?string $accessibilite = null;

    #[ORM\Column(name: 'regles_securite')]
    #[Assert\IsTrue(message: "Vous devez accepter les règles de sécurité")]
    private ?bool $reglesSecurite = null;

    #[ORM\Column(name: 'benevolat', length: 20, nullable: true)]
    private ?string $benevolat = null;

    #[ORM\Column(name: 'sondage_satisfaction', nullable: true)]
    private ?bool $sondageSatisfaction = null;


    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
     private ?User $user = null;



public function getId(): ?int
{
    return $this->id;
}

public function getEvenement(): ?Evenements
{
    return $this->evenement;
}

public function setEvenement(?Evenements $evenement): static
{
    $this->evenement = $evenement;
    return $this;
}

public function getNomComplet(): ?string
{
    return $this->nomComplet;
}

public function setNomComplet(string $nomComplet): static
{
    $this->nomComplet = $nomComplet;
    return $this;
}

public function getDateNaissance(): ?\DateTimeInterface
{
    return $this->dateNaissance;
}

public function setDateNaissance(\DateTimeInterface $dateNaissance): static
{
    $this->dateNaissance = $dateNaissance;
    return $this;
}

public function getProfession(): ?string
{
    return $this->profession;
}

public function setProfession(string $profession): static
{
    $this->profession = $profession;
    return $this;
}

public function getTailleTshirt(): ?string
{
    return $this->tailleTshirt;
}

public function setTailleTshirt(?string $tailleTshirt): static
{
    $this->tailleTshirt = $tailleTshirt;
    return $this;
}

public function getActiviteGroupe(): ?string
{
    return $this->activiteGroupe;
}

public function setActiviteGroupe(?string $activiteGroupe): static
{
    $this->activiteGroupe = $activiteGroupe;
    return $this;
}

public function getCompetences(): ?string
{
    return $this->competences;
}

public function setCompetences(?string $competences): static
{
    $this->competences = $competences;
    return $this;
}

public function getRegimesAlimentaires(): array
{
    return $this->regimesAlimentaires;
}

public function setRegimesAlimentaires(array $regimesAlimentaires): static
{
    $this->regimesAlimentaires = $regimesAlimentaires;
    return $this;
}

public function getAccessibilite(): ?string
{
    return $this->accessibilite;
}

public function setAccessibilite(?string $accessibilite): static
{
    $this->accessibilite = $accessibilite;
    return $this;
}

public function isReglesSecurite(): ?bool
{
    return $this->reglesSecurite;
}

public function setReglesSecurite(bool $reglesSecurite): static
{
    $this->reglesSecurite = $reglesSecurite;
    return $this;
}

public function getBenevolat(): ?string
{
    return $this->benevolat;
}

public function setBenevolat(?string $benevolat): static
{
    $this->benevolat = $benevolat;
    return $this;
}

public function isSondageSatisfaction(): ?bool
{
    return $this->sondageSatisfaction;
}

public function setSondageSatisfaction(?bool $sondageSatisfaction): static
{
    $this->sondageSatisfaction = $sondageSatisfaction;
    return $this;
}

public function getUser(): ?User
{
    return $this->user;
}

public function setUser(User $user): self
{
    $this->user = $user;
    return $this;
}

}