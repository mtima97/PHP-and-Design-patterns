<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Examples\LateStaticBindings\B;
use App\Examples\Patterns\Adapter\Book;
use App\Examples\Patterns\Adapter\BookAdapter;

$book = new Book('Timur', 'Body');
$bookAdapter = new BookAdapter($book);

customPrint(B::test(false));