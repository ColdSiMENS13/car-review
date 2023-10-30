<?php

namespace App\Services;

use App\Entity\Wheels;
use App\Model\WheelsBrandListItems;
use App\Model\WheelsBrandListResponse;
use App\Repository\WheelsRepository;

class ServiceWheelsRepository
{
    private WheelsRepository $wheelsRepository;

    public function __construct(WheelsRepository $wheelsRepository)
    {
        $this->wheelsRepository = $wheelsRepository;
    }

    public function getBrands(): WheelsBrandListResponse
    {
        $brands = $this->wheelsRepository->findAllBrands();
        $items = array_map(
            fn (Wheels $wheels) => new WheelsBrandListItems(
                $wheels->getId(), $wheels->getSlug(), $wheels->getWheelBrand()
            ),
            $brands
        );

        return new WheelsBrandListResponse($items);
    }
}