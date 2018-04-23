<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );
$copy_status = htmlspecialchars( isset($_POST['copy_status']) ? $_POST['copy_status'] : '' );

include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$return_link = "lib_add_copy_search.php".$_SESSION['search_copy_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem

$sql = "INSERT INTO copy(id, book_id, status)
        VALUES ('', '{$book_id}', '{$copy_status}')";

//zapytanie o informacje o dodanej ksiazce
$info_query = "SELECT author, title, category, publish_year FROM book WHERE id = {$book_id}";
$info_query_result = mysql_query($info_query);
  if(!$info_query_result) echo '<h2>Błąd</h2>';

//sprawdzenie czy wybrano kopie ksiazki
if ( ($book_id=="" || $copy_status=="") || ($book_id=="" && $copy_status=="")) {
   echo '<br><p><b>Nie wybrano ksiazki lub/i statusu kopii.</b></p>';

}else{ //jesli wybrano kopie poprawnie
  $result = mysql_query($sql);
  if(!$result) echo 'błąd dodania kopii ksiazki do bazy';
  else{ //jesli dodano kopie wypusz info
        while($row_info = mysql_fetch_row($info_query_result))
        {
          echo "<h2>Dodano egzmplarz</h2>";
          echo "<p>Autor <b>".$row_info[0]."</b></p>";
          echo "<p>Tytuł <b>".$row_info[1]."</b></p>";
          echo "<p>Kategoria <b>".$row_info[2]."</b></p>";
          echo "<p>Rok wydania <b>".$row_info[3]."</b></p>";
          echo "<p>Status <b>".$copy_status."</b></p>";
          echo "<br>";
        };
  }
}


echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';

include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
