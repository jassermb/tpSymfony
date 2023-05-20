<?php

namespace App\Entity;

use App\Repository\CommandeAccessoiresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeAccessoiresRepository::class)]
class CommandeAccessoires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_complet = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse_email = null;

    #[ORM\Column]
    private ?int $num_tel = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse_livraison = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_accessoire = null;

    #[ORM\Column(length: 255)]
    private ?string $Prix_accessoire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComplet(): ?string
    {
        return $this->nom_complet;
    }

    public function setNomComplet(string $nom_complet): self
    {
        $this->nom_complet = $nom_complet;

        return $this;
    }

    public function getAdresseEmail(): ?string
    {
        return $this->Adresse_email;
    }

    public function setAdresseEmail(string $Adresse_email): self
    {
        $this->Adresse_email = $Adresse_email;

        return $this;
    }

    public function getNumTel(): ?int
    {
        return $this->num_tel;
    }

    public function setNumTel(int $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getAdresseLivraison(): ?string
    {
        return $this->Adresse_livraison;
    }

    public function setAdresseLivraison(string $Adresse_livraison): self
    {
        $this->Adresse_livraison = $Adresse_livraison;

        return $this;
    }

    public function getNomAccessoire(): ?string
    {
        return $this->Nom_accessoire;
    }

    public function setNomAccessoire(string $Nom_accessoire): self
    {
        $this->Nom_accessoire = $Nom_accessoire;

        return $this;
    }

    public function getPrixAccessoire(): ?string
    {
        return $this->Prix_accessoire;
    }

    public function setPrixAccessoire(string $Prix_accessoire): self
    {
        $this->Prix_accessoire = $Prix_accessoire;

        return $this;
    }
}
