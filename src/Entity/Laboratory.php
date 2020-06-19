<?php

namespace App\Entity;

use App\Repository\LaboratoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LaboratoryRepository::class)
 */
class Laboratory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $namelaboratory;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codelaboratory;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $creePar;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modifiePar;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creeLe;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $modifieLe;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="laboratory")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamelaboratory(): ?string
    {
        return $this->namelaboratory;
    }

    public function setNamelaboratory(?string $namelaboratory): self
    {
        $this->namelaboratory = $namelaboratory;

        return $this;
    }

    public function getCodelaboratory(): ?string
    {
        return $this->codelaboratory;
    }

    public function setCodelaboratory(?string $codelaboratory): self
    {
        $this->codelaboratory = $codelaboratory;

        return $this;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->products->contains($product)) {
            $this->products[] = $product;
            $product->setLaboratory($this);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        if ($this->products->contains($product)) {
            $this->products->removeElement($product);
            // set the owning side to null (unless already changed)
            if ($product->getLaboratory() === $this) {
                $product->setLaboratory(null);
            }
        }

        return $this;
    }

    public function getCreePar(): ?string
    {
        return $this->creePar;
    }

    public function setCreePar(?string $creePar): self
    {
        $this->creePar = $creePar;

        return $this;
    }

    public function getModifiePar(): ?string
    {
        return $this->modifiePar;
    }

    public function setModifiePar(?string $modifiePar): self
    {
        $this->modifiePar = $modifiePar;

        return $this;
    }

    public function getCreeLe(): ?\DateTimeInterface
    {
        return $this->creeLe;
    }

    public function setCreeLe(?\DateTimeInterface $creeLe): self
    {
        $this->creeLe = $creeLe;

        return $this;
    }

    public function getModifieLe(): ?\DateTimeInterface
    {
        return $this->modifieLe;
    }

    public function setModifieLe(?\DateTimeInterface $modifieLe): self
    {
        $this->modifieLe = $modifieLe;

        return $this;
    }
}
