<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EntrepotRepository;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass:EntrepotRepository::class)]
class Entrepot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $entrepotid = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Length(min:3,minMessage:" 3 characters minimum")]
    #[Assert\Length(max:15)]
    private ?string $nome = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Length(min:3,minMessage:" 3 characters minimum")]
    #[Assert\Length(max:15)]
    private ?string $adressee = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Positive(message:"Please enter a valid number")]
    private ?int $capacitee = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"You need to fill all the fields")]
    #[Assert\Length(min:3,minMessage:" 3 characters minimum")]
    #[Assert\Length(max:15)]
    private ?string $statute= null;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Stock", inversedBy="entrepotid")
     * @ORM\JoinTable(name="stock_entrepot",
     *   joinColumns={
     *     @ORM\JoinColumn(name="EntrepotID", referencedColumnName="EntrepotID")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="StockID", referencedColumnName="StockID")
     *   }
     * )
     */
    private $stockid = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stockid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getEntrepotid(): ?int
    {
        return $this->entrepotid;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getAdressee(): ?string
    {
        return $this->adressee;
    }

    public function setAdressee(string $adressee): static
    {
        $this->adressee = $adressee;

        return $this;
    }

    public function getCapacitee(): ?int
    {
        return $this->capacitee;
    }

    public function setCapacitee(int $capacitee): static
    {
        $this->capacitee = $capacitee;

        return $this;
    }

    public function getStatute(): ?string
    {
        return $this->statute;
    }

    public function setStatute(string $statute): static
    {
        $this->statute = $statute;

        return $this;
    }

    /**
     * @return Collection<int, Stock>
     */
    public function getStockid(): Collection
    {
        return $this->stockid;
    }

    public function addStockid(Stock $stockid): static
    {
        if (!$this->stockid->contains($stockid)) {
            $this->stockid->add($stockid);
        }

        return $this;
    }

    public function removeStockid(Stock $stockid): static
    {
        $this->stockid->removeElement($stockid);

        return $this;
    }

}
