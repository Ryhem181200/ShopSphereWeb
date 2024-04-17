<?php

namespace App\Entity;
use App\Repository\StockRepository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity( repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $stockid = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Positive(message:"Please enter a valid number")]
    private ?float $prixunitaires = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Positive(message:"Please enter a valid number")]
    private ?int $codeproduits = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Positive(message:"Please enter a valid number")]
    private ?int $quantites = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message:"You cannot leave this field Empty")]
    private ?\DateTimeInterface $daterestocks = null;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Entrepot", mappedBy="stockid")
     */
    private $entrepotid = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entrepotid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->daterestocks = new \DateTime();
    }

    public function getStockid(): ?int
    {
        return $this->stockid;
    }

    public function getPrixunitaires(): ?float
    {
        return $this->prixunitaires;
    }

    public function setPrixunitaires(float $prixunitaires): static
    {
        $this->prixunitaires = $prixunitaires;

        return $this;
    }

    public function getCodeproduits(): ?int
    {
        return $this->codeproduits;
    }

    public function setCodeproduits(int $codeproduits): static
    {
        $this->codeproduits = $codeproduits;

        return $this;
    }

    public function getQuantites(): ?int
    {
        return $this->quantites;
    }

    public function setQuantites(int $quantites): static
    {
        $this->quantites = $quantites;

        return $this;
    }

    public function getDaterestocks(): ?\DateTimeInterface
    {
        return $this->daterestocks;
    }

    public function setDaterestocks(\DateTimeInterface $daterestocks): static
    {
        $this->daterestocks = $daterestocks;

        return $this;
    }

    /**
     * @return Collection<int, Entrepot>
     */
    public function getEntrepotid(): Collection
    {
        return $this->entrepotid;
    }

    public function addEntrepotid(Entrepot $entrepotid): static
    {
        if (!$this->entrepotid->contains($entrepotid)) {
            $this->entrepotid->add($entrepotid);
            $entrepotid->addStockid($this);
        }

        return $this;
    }

    public function removeEntrepotid(Entrepot $entrepotid): static
    {
        if ($this->entrepotid->removeElement($entrepotid)) {
            $entrepotid->removeStockid($this);
        }

        return $this;
    }

}
