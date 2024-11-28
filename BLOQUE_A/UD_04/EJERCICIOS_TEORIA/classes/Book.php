<?php
class Book
{
    public string $title;
    public string $author;
    public int $pages;

    function __construct(string $title, string $author, int $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }
}
?>