<?php

declare(strict_types=1);

namespace App\Services\Provider;

use App\Model\Car\CarInterface;
use Symfony\Component\DependencyInjection\Attribute\AutowireLocator;
use Symfony\Contracts\Service\ServiceCollectionInterface;

class CarProvider
{
    public function __construct(
        #[AutowireLocator(
            services: CarInterface::class,
        )]
        private ServiceCollectionInterface $carServiceLocator,
    ) {
    }

    public function driveCar(string $carType): void
    {
        if (!$this->carServiceLocator->has($carType)) {
            throw new \InvalidArgumentException(sprintf(
                'Car for type "%s" not found!',
                $carType,
            ));
        }

        /** @var CarInterface $car */
        $car = $this->carServiceLocator->get($carType);

        $car->drive();
    }

    /**
     * @return array<string, string>
     */
    public function getAvailableCars(): array
    {
        return $this->carServiceLocator->getProvidedServices();
    }
}
