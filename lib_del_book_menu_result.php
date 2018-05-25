<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );
include "templ_scripts/connect.php";
include 'templ_scripts/login_before_content_template.php';
$return_link = "lib_del_book_search.php".$_SESSION['search_book_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem


$sql = "DELETE FROM book
        WHERE id={$book_id}";

$info_query = "SELECT id, author, title, category, publish_year FROM book WHERE id={$book_id}";
$info_query_result = mysql_query($info_query);
if(!$info_query_result) echo 'błąd pobrania info ksiazki z bazy';

$get_number_book_copy = "SELECT COUNT(*) from copy WHERE book_id={$book_id}";



  if ( $book_id=="") {
     echo "<h2>Błąd</h2>";
     echo '<p>Nie wybrano ksiazki</p>';
     echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
  }
  else{
    //liczba kopii ksiazki
    $result = mysql_query($get_number_book_copy);
    if(!$result) echo 'błąd zapytania liczby kopii ksiazki z bazy';
    else {
      while($row = mysql_fetch_row($result))
      {
        $book_copy_counter = $row[0];
      };
    }

    //usuwanie ksiazki

    if($book_copy_counter=="0")
    {
      $result = mysql_query($sql);
      if(!$result) echo 'błąd usuniecia kopii ksiazki z bazy';
      else{
                while($row_info = mysql_fetch_row($info_query_result))
                {
                  echo "<h2>Usunięto książkę</h2>";
                  echo "<p>id książki <b>".$row_info[0]."</b></p>";
                  echo "<p>Autor <b>".$row_info[1]."</b></p>";
                  echo "<p>Tytuł <b>".$row_info[2]."</b></p>";
                  echo "<p>Kategoria <b>".$row_info[3]."</b></p>";
                  echo "<p>Rok wydania <b>".$row_info[4]."</b></p>";
                  echo "<br>";
                };
          }
    }
    else
    { //gdy ksiazka ma swoja kopie w bazie
      while($row_info = mysql_fetch_row($info_query_result))
      {
      echo "<h2>Błąd</h2>";
      echo "<p><b>Ksiażka:</b><p>";
      echo "<p>id książki <b>".$row_info[0]."</b></p>";
      echo "<p>Autor <b>".$row_info[1]."</b></p>";
      echo "<p>Tytuł <b>".$row_info[2]."</b></p>";
      echo "<p>Kategoria <b>".$row_info[3]."</b></p>";
      echo "<p>Rok wydania <b>".$row_info[4]."</b></p>";
      echo "<br> <p><b>Posiada swoje egzemplarze w bazie, usuń je wybierając z lewego menu 'Usuń kopie książki' zanim usuniesz samą książkę</b></p>";
    }
    }



      echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
    }
