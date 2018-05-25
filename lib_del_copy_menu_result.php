<?php
$copy_id = htmlspecialchars( isset($_POST['copy_id']) ? $_POST['copy_id'] : '' );
include "templ_scripts/connect.php";
include 'templ_scripts/login_before_content_template.php';
$return_link = "lib_del_copy_search.php".$_SESSION['search_copy_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem

$sql = "DELETE FROM copy
        WHERE id={$copy_id}";

//zapytanie o informacje o dodanej ksiazce
$info_query = "SELECT book.title, book.author, book.publish_year, book.category, book.pages, copy.id, copy.status
          FROM book
          INNER JOIN copy ON book.id = copy.book_id
          WHERE copy.id = {$copy_id}";
$info_query_result = mysql_query($info_query);
  if(!$info_query_result) echo '<h2>Błąd</h2>';

if ( $copy_id=="")
{
   echo '<p><b>Nie wybrano egzemplarza ksiazki</b></p>';
}else{
  $result = mysql_query($sql);
  if(!$result) echo 'błąd usuniecia kopii ksiazki z bazy';
  else{
    //Jak wszystko ok to wypisz info
    while($row_info = mysql_fetch_row($info_query_result))
    {
      echo "<h2>Usunieto egzmplarz</h2>";
      echo "<p>Id egzemplarza <b>".$row_info[5]."</b></p>";
      echo "<p>Status egzemplarza <b>".$row_info[6]."</b></p>";
      echo "<p>Autor <b>".$row_info[1]."</b></p>";
      echo "<p>Tytuł <b>".$row_info[2]."</b></p>";
      echo "<p>Kategoria <b>".$row_info[2]."</b></p>";
      echo "<p>Rok wydania <b>".$row_info[3]."</b></p>";
      echo "<br>";
    };
  }
}
echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';

include 'templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
