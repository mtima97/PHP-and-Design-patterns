<?php

namespace Includes;

class BookAdapter
{
    private Book $book;

    public function __construct(Book $book)
    {
        $this->book = $book;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->book->getAuthor() . ' ' . $this->book->getTitle();
    }
}