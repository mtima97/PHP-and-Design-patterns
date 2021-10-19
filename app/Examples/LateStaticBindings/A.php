<?php

declare(strict_types=1);

namespace App\Examples\LateStaticBindings;

class A
{
    public static function who(): string
    {
        return __CLASS__;
    }

    public static function test(bool $useStatic): string
    {
        if ($useStatic) {
            return static::who();
        }

        return self::who();
    }
}
