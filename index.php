<?php

declare(strict_types=1);

spl_autoload_register(function ($className) {
    $resolvedClassName = str_replace("\\", "/", $className);

    include_once "$resolvedClassName.php";
});

require 'helpers.php';

$age = 24;

function getName(callable $callback)
{
    $name = 'Timur';

    $callback($name, $GLOBALS['age']);
}

getName(fn ($name, $age) => customPrint($name, $age));
