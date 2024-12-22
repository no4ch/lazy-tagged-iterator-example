<?php

declare(strict_types=1);

namespace App\Model\Car;

use Symfony\Component\DependencyInjection\Attribute\AsTaggedItem;

#[AsTaggedItem('mazda')]
class MazdaCar implements CarInterface
{
    public function drive(): void
    {
        dump('Drive and drive.');
    }
}
