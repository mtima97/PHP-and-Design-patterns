<?php

declare(strict_types=1);

spl_autoload_register(function ($className) {
    $resolvedClassName = str_replace("\\", "/", $className);

    include_once "$resolvedClassName.php";
});

require 'helpers.php';

use Includes\Furniture\Table;
use Includes\ChildClass;

$table = new Table;
$child = new ChildClass;

$child->loopThroughGen();