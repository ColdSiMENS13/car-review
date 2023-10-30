<?php

namespace App\Entity;

use App\Repository\WheelsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WheelsRepository::class)]
class Wheels
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    private ?string $slug = null;
    #[ORM\Column(length: 255)]
    private ?string $wheelBrand = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): Wheels
    {
        $this->slug = $slug;
        return $this;
    }

    public function getWheelBrand(): ?string
    {
        return $this->wheelBrand;
    }

    public function setWheelBrand(?string $wheelBrand): Wheels
    {
        $this->wheelBrand = $wheelBrand;
        return $this;
    }
}