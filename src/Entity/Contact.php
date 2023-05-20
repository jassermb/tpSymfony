<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom_complet = null;

    #[ORM\Column(length: 255)]
    private ?string $Adresse_email = null;

    #[ORM\Column]
    private ?int $num_tel = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Message = null;

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

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function setMessage(string $Message): self
    {
        $this->Message = $Message;

        return $this;
    }
}
