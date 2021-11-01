<?php

declare(strict_types=1);

namespace App\Examples\Patterns\FactoryMethod;

abstract class GardenInterface
{
    abstract public function harvest(): array;

    public function grow(): array
    {
        $items = $this->harvest();

        array_shift($items);

        return $items;
    }
}
