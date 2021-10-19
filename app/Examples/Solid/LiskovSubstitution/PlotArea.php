<?php

declare(strict_types=1);

namespace App\Examples\Solid\LiskovSubstitution;

interface PlotArea
{
    public function totalNumberOfPlots(): float;
}
