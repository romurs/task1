<?php

require_once 'vendor/autoload.php';

use Romurs\Task1\Library;
use Romurs\Task1\Book;

$book = new Book("Фасад", "Роман", "2024", "Ужастик");
$abc = new Book('Азбука', 'Англия', '2003', 'Обучение');
$kniga = new Book('Африка', 'Роман', '1999', 'Негры');
$library = new Library;

// print($Book->getBookInfo());

$library->addBook($Book);
$library->addBook($ABC);
$library->addBook($Kniga);

$library->listAllBooks();

$library->findBookByAuthor('Роман');

$library->removeBookByTitle('Азбука');
$library->listAllBooks();

