<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?string $productId = null;

    #[ORM\Column(length: 255)]
    private ?string $brand = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $popularHashtags = null;

    #[ORM\Column(nullable: true)]
    private ?int $reviews = null;

    #[ORM\Column(nullable: true)]
    private ?int $mentions = null;

    #[ORM\Column(nullable: true)]
    private ?int $engagement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductid(): ?string
    {
        return $this->productId;
    }

    public function setProductid(string $productId): static
    {
        $this->productId = $productId;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): static
    {
        $this->brand = $brand;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getPopularHashtags(): ?array
    {
        return $this->popularHashtags;
    }

    public function setPopularHashtags(?array $popularHashtags): static
    {
        $this->popularHashtags = $popularHashtags;

        return $this;
    }

    public function getReviews(): ?int
    {
        return $this->reviews;
    }

    public function setReviews(?int $reviews): static
    {
        $this->reviews = $reviews;

        return $this;
    }

    public function getMentions(): ?int
    {
        return $this->mentions;
    }

    public function setMentions(?int $mentions): static
    {
        $this->mentions = $mentions;

        return $this;
    }

    public function getEngagement(): ?int
    {
        return $this->engagement;
    }

    public function setEngagement(?int $engagement): static
    {
        $this->engagement = $engagement;

        return $this;
    }
}
