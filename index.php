<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Examples\Patterns\Adapter\Book;

$book = new Book('Timur', 'Body');

customPrint($book->getAuthor());