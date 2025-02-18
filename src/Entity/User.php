<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(type: 'json')]
    private array $roles = [];

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 20)]
    private ?string $numeroTelephone = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Hebergement::class, orphanRemoval: true)]
    private Collection $hebergements;
    
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Workshop::class, orphanRemoval: true)]
    private Collection $workshops;

    public function __construct()
    {
        $this->hebergements = new ArrayCollection();
        $this->workshops = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        // Ensure every user has at least ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getNumeroTelephone(): ?string
    {
        return $this->numeroTelephone;
    }

    public function setNumeroTelephone(string $numeroTelephone): self
    {
        $this->numeroTelephone = $numeroTelephone;
        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;
        return $this;
    }

    public function eraseCredentials(): void
    {
        // Clear temporary sensitive data
    }

    public function serialize(): string
    {
        return serialize([$this->id, $this->username, $this->password]);
    }

    public function unserialize($serialized): void
    {
        [$this->id, $this->username, $this->password] = unserialize($serialized);
    }

    // Hebergement relationship methods
    public function getHebergements(): Collection
    {
        return $this->hebergements;
    }
    
    public function addHebergement(Hebergement $hebergement): static
    {
        if (!$this->hebergements->contains($hebergement)) {
            $this->hebergements->add($hebergement);
            $hebergement->setUser($this);
        }
        return $this;
    }
    
    public function removeHebergement(Hebergement $hebergement): static
    {
        if ($this->hebergements->removeElement($hebergement)) {
            if ($hebergement->getUser() === $this) {
                $hebergement->setUser(null);
            }
        }
        return $this;
    }

    // Workshop relationship methods
    public function getWorkshops(): Collection
    {
        return $this->workshops;
    }
    
    public function addWorkshop(Workshop $workshop): static
    {
        if (!$this->workshops->contains($workshop)) {
            $this->workshops->add($workshop);
            $workshop->setUser($this);
        }
        return $this;
    }
    
    public function removeWorkshop(Workshop $workshop): static
    {
        if ($this->workshops->removeElement($workshop)) {
            if ($workshop->getUser() === $this) {
                $workshop->setUser(null);
            }
        }
        return $this;
    }
}
