<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';
$return_link = "lib_del_book_search.php".$_SESSION['search_book_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem

$sql = "DELETE FROM book
        WHERE id={$book_id}";

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
        //Jak wszystko ok to wypisz zarejestrowanego
        echo "<h2>Usunięto książkę</h2>";
        echo "<p>id książki ".$book_id."</p>";
        echo "<br>";
          }
    }
    else
    {  //gdy sa kopie ksiazki
      echo "<h2>Błąd</h2>";
      echo "<p>Książka ma kopie. Nie mozna usunąć książki. Usuń napierw kopie</p>";
    }


      echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
    }
