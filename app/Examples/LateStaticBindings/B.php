<?php

declare(strict_types=1);

namespace App\Examples\LateStaticBindings;

final class B extends A
{
    public static function who(): string
    {
        return __CLASS__;
    }
}
