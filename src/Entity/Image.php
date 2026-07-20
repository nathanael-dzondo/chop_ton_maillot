<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $refImage = null;

    #[ORM\ManyToOne(inversedBy: 'images')]
    private ?Produit $produit_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRefImage(): ?string
    {
        return $this->refImage;
    }

    public function setRefImage(string $refImage): static
    {
        $this->refImage = $refImage;

        return $this;
    }

    public function getProduitId(): ?Produit
    {
        return $this->produit_id;
    }

    public function setProduitId(?Produit $produit_id): static
    {
        $this->produit_id = $produit_id;

        return $this;
    }
}
