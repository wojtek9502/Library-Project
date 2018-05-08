<?php

$search = htmlspecialchars( isset($_POST['search']) ? $_POST['search'] : '' );
$search_filter = htmlspecialchars( isset($_POST['search_filter']) ? $_POST['search_filter'] : '' );
// echo $search;
// echo $search_filter;


switch ($search_filter) {
  case 'author':
  {
    $query = "SELECT id, title, author, category, publish_year, isbn, pages, book_descript, img_link
              FROM book
              WHERE author LIKE '%{$search}%'";
  }break;

  case 'title':
  {
    $query = "SELECT id, title, author, category, publish_year, isbn, pages, book_descript, img_link
              FROM book
              WHERE title LIKE '%{$search}%'";
  }break;

  case 'category':
  {
    $query = "SELECT id, title, author, category, publish_year, isbn, pages, book_descript, img_link
              FROM book
              WHERE category LIKE '%{$search}%'";
  }break;

  default:
  {
    $query = "SELECT id, title, author, category, publish_year, isbn, pages, book_descript, img_link
              FROM book
              WHERE title LIKE '%{$search}%' OR author LIKE '%{$search}%' OR category LIKE '%{$search}%'" ;
  }break;
}


 ?>
