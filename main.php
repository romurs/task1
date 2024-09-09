<?php

require_once 'vendor/autoload.php';

use Romurs\Task1\Library;
use Romurs\Task1\Book;

$book = new Book("Фасад", "Роман", "2024", "Ужастик");
$abc = new Book('Азбука', 'Англия', '2003', 'Обучение');
$kniga = new Book('Африка', 'Роман', '1999', 'Негры');
$library = new Library;

// print($Book->getBookInfo());

$library->addBook($book);
$library->addBook($abc);
$library->addBook($kniga);

$library->listAllBooks();

foreach($library->findBookByAuthor('Роман') as $value){
  print($value->getBookInfo());
}
print('---------------------') .PHP_EOL;

$library->removeBookByTitle('Азбука');
$library->listAllBooks();

