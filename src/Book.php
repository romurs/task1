<?php

namespace romurs\task1;

class Book
{
  private string $title;
  private string $author;
  private string $ublishedYear;
  private string $genre;
  
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

  public function getTitle() : string { 
    return $this->title;
  }

  public function getAuthor() : string { 
    return $this->author;
  }

  public function getUblishedYear() : string { 
    return $this->ublishedYear;
  }

  public function getGenre() : string { 
    return $this->genre;
  }
}