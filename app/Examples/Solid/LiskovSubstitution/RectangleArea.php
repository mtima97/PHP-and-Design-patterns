<?php

declare(strict_types=1);

namespace App\Examples\Solid\LiskovSubstitution;

final class RectangleArea implements PlotArea
{
    public function __construct(private int $width, private int $height)
    {
    }

    public function totalNumberOfPlots(): float
    {
        return ceil($this->width * $this->height / 2);
    }
}
