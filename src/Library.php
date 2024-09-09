<?php

namespace Romurs\Task1;

use Romurs\Task1\Book;

class Library{

  private array $books = [];

  public function addBook(Book $book): void{
    array_push($this->books, $book);
  }

  public function removeBookByTitle(string $title) : void {
    for ($i = 0; $i < count($this->books); $i++){
      if($this->books[$i]->title == $title){
        array_splice($this->books, 1, $i);
        print('Книга удалена с полок') .PHP_EOL;
        print('---------------------') .PHP_EOL;
        return;
      }
    }
  }

  public function findBookByAuthor(string $author) : void {
    for ($i = 0; $i < count($this->books); $i++){
      if($this->books[$i]->author == $author){
        print($this->books[$i]->getBookInfo());
      }
    }
    print('---------------------') .PHP_EOL;
  }

  public function listAllBooks() {
    for ($i = 0; $i < count($this->books); $i++){
      print($this->books[$i]->getBookInfo());
    }
    print('---------------------') .PHP_EOL;
  }
}