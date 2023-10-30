<?php

namespace App\Model;

class WheelsBrandListItems
{
    private $id;
    private $slug;
    private $wheelBrand;

    public function __construct(int $id, string $slug, string $wheelBrand)
    {
        $this->id = $id;
        $this->slug = $slug;
        $this->wheelBrand = $wheelBrand;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSlug(): string
    {
        return $this->id;
    }

    public function getWheelBrand(): string
    {
        return $this->id;
    }
}