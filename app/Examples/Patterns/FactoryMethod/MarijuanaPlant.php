<?php

declare(strict_types=1);

namespace App\Examples\Patterns\FactoryMethod;

class MarijuanaPlant implements PlantInterface
{
    public function consume(): void
    {
        print 'It\'s delicious';
    }
}
