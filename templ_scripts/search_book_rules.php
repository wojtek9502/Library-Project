<<?php

$search = htmlspecialchars($_GET['search']);
$search_filter = htmlspecialchars($_GET['search_filter']);
// echo $search;
// echo $search_filter;


switch ($search_filter) {
  case 'author':
  {
    $query = "SELECT id, title, author, category, publish_year
              FROM book
              WHERE author LIKE '%{$search}%'";
  }break;

  case 'title':
  {
    $query = "SELECT id, title, author, category, publish_year
              FROM book
              WHERE title LIKE '%{$search}%'";
  }break;

  case 'category':
  {
    $query = "SELECT id, title, author, category, publish_year
              FROM book
              WHERE category LIKE '%{$search}%'";
  }break;

  default:
  {
    $query = "SELECT id, title, author, category, publish_year
              FROM book
              WHERE title LIKE '%{$search}%' OR author LIKE '%{$search}%' OR category LIKE '%{$search}%'" ;
  }break;
}


 ?>
