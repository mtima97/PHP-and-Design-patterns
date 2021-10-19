<?php

declare(strict_types=1);

namespace App\Examples\Solid\LiskovSubstitution;

class EmptyGarden
{
    public function __construct(private PlotArea $plot)
    {
    }

    public function items(): array
    {
        $plots = intval($this->plot->totalNumberOfPlots());

        return array_fill(0, $plots, 'handful of dirt');
    }
}
