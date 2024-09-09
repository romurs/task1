<?php

namespace romurs\task1;

class Book
{
  public string $title;
  public string $author;
  public string $ublishedYear;
  public string $genre;
  
  public function __construct(string $title, string $author, string $ublishedYear, string $genre)
  {
    $this->title = $title;
    $this->author = $author;
    $this->ublishedYear = $ublishedYear;
    $this->genre = $genre;
  }

  public function getBookInfo() : string {
    return "{$this->title}, {$this->author}, {$this->ublishedYear}, {$this->genre}" .PHP_EOL;
  }
}