<?php

namespace App\Entity;

use App\Repository\ContratRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContratRepository::class)
 */
class Contrat
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
     * @ORM\Column(type="integer")
     */
    private $preavis;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="float")
     */
    private $montant;

    /**
     * @ORM\Column(type="integer")
     */
    private $numEnregistrement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $periodiciteEntretien;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $periodiciteFacturation;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $augmentation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libellePDF;

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="contrats")
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

    public function getPreavis(): ?int
    {
        return $this->preavis;
    }

    public function setPreavis(int $preavis): self
    {
        $this->preavis = $preavis;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getNumEnregistrement(): ?int
    {
        return $this->numEnregistrement;
    }

    public function setNumEnregistrement(int $numEnregistrement): self
    {
        $this->numEnregistrement = $numEnregistrement;

        return $this;
    }

    public function getPeriodiciteEntretien(): ?string
    {
        return $this->periodiciteEntretien;
    }

    public function setPeriodiciteEntretien(string $periodiciteEntretien): self
    {
        $this->periodiciteEntretien = $periodiciteEntretien;

        return $this;
    }

    public function getPeriodiciteFacturation(): ?string
    {
        return $this->periodiciteFacturation;
    }

    public function setPeriodiciteFacturation(string $periodiciteFacturation): self
    {
        $this->periodiciteFacturation = $periodiciteFacturation;

        return $this;
    }

    public function getAugmentation(): ?float
    {
        return $this->augmentation;
    }

    public function setAugmentation(?float $augmentation): self
    {
        $this->augmentation = $augmentation;

        return $this;
    }

    public function getLibellePDF(): ?string
    {
        return $this->libellePDF;
    }

    public function setLibellePDF(?string $libellePDF): self
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
