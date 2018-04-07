<<?php

$search = htmlspecialchars($_GET['search']);
$search_filter = htmlspecialchars($_GET['search_filter']);
// echo $search;
// echo $search_filter;


switch ($search_filter) {
  case 'author':
  {
    $query = "SELECT id, title, author
              FROM book
              WHERE author LIKE '%{$search}%'";
  }break;

  case 'title':
  {
    $query = "SELECT id, title, author
              FROM book
              WHERE title LIKE '%{$search}%'";
  }break;



  default:
  {
    $query = "SELECT id, title, author
              FROM book
              WHERE title LIKE '%{$search}%' OR author LIKE '%{$search}%'" ;
  }break;
}


 ?>
