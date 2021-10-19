<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Examples\LateStaticBindings\B;
use App\Examples\Patterns\Adapter\Book;
use App\Examples\Patterns\Adapter\BookAdapter;
use App\Examples\Solid\LiskovSubstitution\EmptyGarden;
use App\Examples\Solid\LiskovSubstitution\RectangleArea;

$book = new Book('Timur', 'Body');
$bookAdapter = new BookAdapter($book);

$area = new RectangleArea(2, 2);
$garden = new EmptyGarden($area);

customPrint(B::test(false), $garden->items());