<?php

declare(strict_types=1);

namespace App\Model\Car;

use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;

#[AsTaggedItem('bmw')]
class BmwCar implements CarInterface
{
    public function drive(): void
    {
        dump('crash engine or etc.');
    }
}