<<?php

$search = htmlspecialchars($_GET['search']);
$search_filter = htmlspecialchars($_GET['search_filter']);
// echo $search;
// echo $search_filter;


switch ($search_filter) {
  case 'author':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search}%'";
  }break;

  case 'title':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.title LIKE '%{$search}%'";
  }break;

  case 'category':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.category LIKE '%{$search}%'";
  }break;


  default:
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search}%' OR book.title LIKE '%{$search}%' OR book.category LIKE '%{$search}%'";
  }break;
}


 ?>
