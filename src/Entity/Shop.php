<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Entity\Trait\DateTrait;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ShopRepository;

#[ORM\Entity(repositoryClass: ShopRepository::class)]
class Shop
{
     use DateTrait;
     
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product_Name = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $price_Product = null;

    #[ORM\Column(length: 255)]
    private ?string $picture = null;

    #[ORM\Column(length: 255)]
    private ?string $small_Desc_Product = null;

    #[ORM\Column(length: 255)]
    private ?string $high_Desc_Product = null;

    #[ORM\Column(length: 255)]
    private ?string $stock = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $discount_Percent = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $discount_Numeric = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->product_Name;
    }

    public function setProductName(string $product_Name): static
    {
        $this->product_Name = $product_Name;

        return $this;
    }

    public function getPriceProduct(): ?string
    {
        return $this->price_Product;
    }

    public function setPriceProduct(string $price_Product): static
    {
        $this->price_Product = $price_Product;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): static
    {
        $this->picture = $picture;

        return $this;
    }

    public function getSmallDescProduct(): ?string
    {
        return $this->small_Desc_Product;
    }

    public function setSmallDescProduct(string $small_Desc_Product): static
    {
        $this->small_Desc_Product = $small_Desc_Product;

        return $this;
    }

    public function getHighDescProduct(): ?string
    {
        return $this->high_Desc_Product;
    }

    public function setHighDescProduct(string $high_Desc_Product): static
    {
        $this->high_Desc_Product = $high_Desc_Product;

        return $this;
    }

    public function getStock(): ?string
    {
        return $this->stock;
    }

    public function setStock(string $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDiscountPercent(): ?string
    {
        return $this->discount_Percent;
    }

    public function setDiscountPercent(?string $discount_Percent): static
    {
        $this->discount_Percent = $discount_Percent;

        return $this;
    }

    public function getDiscountNumeric(): ?string
    {
        return $this->discount_Numeric;
    }

    public function setDiscountNumeric(?string $discount_Numeric): static
    {
        $this->discount_Numeric = $discount_Numeric;

        return $this;
    }
}
