<?php

namespace App\Entity;

use App\Repository\ConventionRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ConventionRepository::class)
 * @Vich\Uploadable
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
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="conventions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $numFournisseur;

    /**
     * @ORM\Column(type="blob")
     */
    private $libellePDF;

    /**
     * @Vich\UploadableField(mapping="contratUpload", fileNameProperty="libellePDF")
     */
    private $filePDF;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;
    
    public function __construct()
    {
        $this->updatedAt = new DateTime();
    }

    public function getfilePDF() {
        return $this->pieceJointeFile;
    }

    public function setfilePDF($filePDF): void
    {
        $this->filePDF = $filePDF;

        if($filePDF) {
            $this->updatedAt = new DateTime();
        }
    }

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

    public function getNumFournisseur(): ?Fournisseur
    {
        return $this->numFournisseur;
    }

    public function setNumFournisseur(?Fournisseur $numFournisseur): self
    {
        $this->numFournisseur = $numFournisseur;

        return $this;
    }

    public function getLibellePDF()
    {
        return $this->libellePDF;
    }

    public function setLibellePDF($libellePDF): self
    {
        $this->libellePDF = $libellePDF;

        return $this;
    }
}
