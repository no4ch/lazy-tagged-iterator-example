<?php

declare(strict_types=1);

namespace App\Controller;

use App\Services\Provider\CarProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ExampleController extends AbstractController
{
    #[Route(
        path: '/{carType?}',
        defaults: [
            'carType' => 'bmw',
        ]
    )]
    public function mainAction(
        CarProvider $carProvider,
        string $carType,
    ): JsonResponse {
        $carProvider->driveCar($carType);

        return new JsonResponse($carProvider->getAvailableCars());
    }
}
