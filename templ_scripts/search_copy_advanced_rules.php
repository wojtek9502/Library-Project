<?php

$search_title = htmlspecialchars($_GET['search_title']);
$search_author = htmlspecialchars($_GET['search_author']);
$search_category = htmlspecialchars($_GET['search_category']);
// echo $search_title;
// echo $search_author;
// echo $search_category;

// if field is not empty then digit is 1, 8 possible combinations, 000 not used
$emptyFields = "000";
if($search_title!==""){ //100
  $emptyFields[0]=1;
}
if($search_author!==""){ //010
  $emptyFields[1]=1;
}
if($search_category!==""){ //001
  $emptyFields[2]=1;
}
// echo $emptyFields;

switch ($emptyFields) {
  case '100':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.title LIKE '%{$search_title}%' AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;

  case '110':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.title LIKE '%{$search_title}%'  AND book.author LIKE '%{$search_author}%'  AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;

  case '111':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE  book.title LIKE '%{$search_title}%'  AND book.author LIKE '%{$search_author}%' AND book.category LIKE '%{$search_category}%' AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;


  case '011':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search_author}%' AND book.category LIKE '%{$search_category}%' AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;

  case '001':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search_author}%' AND book.category LIKE '%{$search_category}%' AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;

  case '010':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE book.author LIKE '%{$search_author}%' AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;

  case '101':
  {
    $query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
              FROM book
              INNER JOIN copy ON book.id = copy.book_id
              WHERE  book.title LIKE '%{$search_title}%' AND book.category LIKE '%{$search_category}%' AND copy.status NOT LIKE 'WYPOZYCZONE' AND copy.status NOT LIKE 'PROLONGOWANA'";
  }break;


}


 ?>
