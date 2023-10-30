<?php

namespace App\Controller;

use App\Services\ServiceWheelsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WheelBrandController extends AbstractController
{
    private ServiceWheelsRepository $serviceWheelsRepository;

    public function __construct(ServiceWheelsRepository $serviceWheelsRepository)
    {
        $this->serviceWheelsRepository = $serviceWheelsRepository;
    }

    #[Route('/wheelBrands')]
    public function getBrands(): Response
    {
        return $this->json($this->serviceWheelsRepository->getBrands());
    }
}