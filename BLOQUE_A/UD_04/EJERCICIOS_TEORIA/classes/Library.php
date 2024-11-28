<?php
include 'Book.php';
class Library
{
    public array $books;
    public string $libraryName;

    public function __construct(string $libraryName, array $books = []) {
        $this->libraryName = $libraryName;
        $this->books = $books;
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookRemove) {
        foreach ($this->books as $index => $book) {
            if($book === $bookRemove) {
                unset($this->books[$index]);
                return "Book '{$bookRemove->title}' removed.";
            }
        }
    }

    public function getBooks() {
        return $this->books;
    }
}