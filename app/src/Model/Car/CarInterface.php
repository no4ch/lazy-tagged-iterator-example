<?php

declare(strict_types=1);

namespace App\Model\Car;

use Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag;

#[AutoconfigureTag]
interface CarInterface
{
    public function drive(): void;
}
