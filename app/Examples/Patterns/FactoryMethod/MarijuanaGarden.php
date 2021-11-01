<?php

declare(strict_types=1);

namespace App\Examples\Patterns\FactoryMethod;

final class MarijuanaGarden extends GardenInterface
{
    public function harvest(): array
    {
        return [
            new MarijuanaPlant(),
            new MarijuanaPlant(),
        ];
    }
}
