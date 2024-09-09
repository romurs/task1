<?php

require_once 'vendor/autoload.php';

use Romurs\Task1\Library;
use Romurs\Task1\Book;

$Book = new Book("Фасад", "Роман", "2024", "Ужастик");
$ABC = new Book('Азбука', 'Англия', '2003', 'Обучение');
$Kniga = new Book('Африка', 'Роман', '1999', 'Негры');
$Library = new Library;

// print($Book->getBookInfo());

$Library->addBook($Book);
$Library->addBook($ABC);
$Library->addBook($Kniga);

$Library->listAllBooks();

$Library->findBookByAuthor('Роман');

$Library->removeBookByTitle('Азбука');
$Library->listAllBooks();

