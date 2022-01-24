<?php

namespace App\Entity;

use App\Repository\ConventionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConventionRepository::class)
 */
class Convention
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libellePDF;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="conventions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $numFournisseur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getLibellePDF(): ?string
    {
        return $this->libellePDF;
    }

    public function setLibellePDF(string $libellePDF): self
    {
        $this->libellePDF = $libellePDF;

        return $this;
    }

    public function getNumFournisseur(): ?Fournisseur
    {
        return $this->numFournisseur;
    }

    public function setNumFournisseur(?Fournisseur $numFournisseur): self
    {
        $this->numFournisseur = $numFournisseur;

        return $this;
    }
}
