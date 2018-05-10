<?php

$search = htmlspecialchars($_POST['search']);
$search_filter = htmlspecialchars($_POST['search_filter']);
// echo $search;
// echo $search_filter;


switch ($search_filter) {
  case 'author':
  {
    $query = "SELECT copy.id, book.title, book.author, book.category, borrowings.borrow_date, borrowings.give_date, user.name, user.surname, user.phone
              FROM borrowings
              INNER JOIN copy ON borrowings.copy_id = copy.id
              INNER JOIN user ON borrowings.user_id = user.id
              INNER JOIN book ON borrowings.book_id = book.id
              WHERE book.author LIKE '%{$search}%'";
  }break;

  case 'title':
  {
    $query = "SELECT copy.id, book.title, book.author, book.category, borrowings.borrow_date, borrowings.give_date, user.name, user.surname, user.phone
              FROM borrowings
              INNER JOIN copy ON borrowings.copy_id = copy.id
              INNER JOIN user ON borrowings.user_id = user.id
              INNER JOIN book ON borrowings.book_id = book.id
              WHERE book.title LIKE '%{$search}%'";
  }break;

  case 'category':
  {
    $query = "SELECT copy.id, book.title, book.author, book.category, borrowings.borrow_date, borrowings.give_date, user.name, user.surname, user.phone
              FROM borrowings
              INNER JOIN copy ON borrowings.copy_id = copy.id
              INNER JOIN user ON borrowings.user_id = user.id
              INNER JOIN book ON borrowings.book_id = book.id
              WHERE book.category LIKE '%{$search}%'";
  }break;

  case 'user':
  {
    $query = "SELECT copy.id, book.title, book.author, book.category, borrowings.borrow_date, borrowings.give_date, user.name, user.surname, user.phone
              FROM borrowings
              INNER JOIN copy ON borrowings.copy_id = copy.id
              INNER JOIN user ON borrowings.user_id = user.id
              INNER JOIN book ON borrowings.book_id = book.id
              WHERE user.name LIKE '%{$search}%' OR user.surname LIKE '%{$search}%'";
  }break;



  default:
  {
    $query = "SELECT copy.id, book.title, book.author, book.category, borrowings.borrow_date, borrowings.give_date, user.name, user.surname, user.phone
              FROM borrowings
              INNER JOIN copy ON borrowings.copy_id = copy.id
              INNER JOIN user ON borrowings.user_id = user.id
              INNER JOIN book ON borrowings.book_id = book.id
              WHERE book.author LIKE '%{$search}%' OR book.title LIKE '%{$search}%' OR book.category LIKE '%{$search}%' OR user.name LIKE '%{$search}%' OR user.surname LIKE '%{$search}%'" ;
  }break;
}


 ?>
