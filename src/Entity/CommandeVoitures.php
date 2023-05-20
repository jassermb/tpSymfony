<?php

namespace App\Entity;

use App\Repository\CommandeVoituresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeVoituresRepository::class)]
class CommandeVoitures
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_complet = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column]
    private ?int $num_tel = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse_livraison = null;

    #[ORM\Column(length: 255)]
    private ?string $Marque_voiture = null;

    #[ORM\Column(length: 255)]
    private ?string $Modele_voiture = null;

    #[ORM\Column]
    private ?int $Prix_voiture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomComplet(): ?string
    {
        return $this->Nom_complet;
    }

    public function setNomComplet(string $Nom_complet): self
    {
        $this->Nom_complet = $Nom_complet;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

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

    public function getMarqueVoiture(): ?string
    {
        return $this->Marque_voiture;
    }

    public function setMarqueVoiture(string $Marque_voiture): self
    {
        $this->Marque_voiture = $Marque_voiture;

        return $this;
    }

    public function getModeleVoiture(): ?string
    {
        return $this->Modele_voiture;
    }

    public function setModeleVoiture(string $Modele_voiture): self
    {
        $this->Modele_voiture = $Modele_voiture;

        return $this;
    }

    public function getPrixVoiture(): ?int
    {
        return $this->Prix_voiture;
    }

    public function setPrixVoiture(int $Prix_voiture): self
    {
        $this->Prix_voiture = $Prix_voiture;

        return $this;
    }
}
