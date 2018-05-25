<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );

include "templ_scripts/connect.php";
include("templ_scripts/before_content_template.php");

$return_link = "catalog_search.php".$_SESSION['catalog_search_back_link']; //utworzenie linku powrotnego do strony z wyszukaniem




echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
';

//zapytanie o informacje o ksiazce
$info_query = "SELECT * FROM book WHERE id = {$book_id}";
$info_query_result = mysql_query($info_query);
  if(!$info_query_result) echo '<h2>Błąd</h2>';

//sprawdzenie czy wybrano kopie ksiazki
if ( $book_id=="" ) {
   echo '<br><p><b>Nie wybrano kopii</b></p>';
}else{ //jesli wybrano kopie poprawnie
        while($row_info = mysql_fetch_row($info_query_result))
        {
          echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a><br><br>';
          echo "<h2>Szczegóły kopii</h2>";
          echo '<img src="'.$row_info[8].'" alt="not found img" height="300" width="200"> <br><br>';
          echo "<p>Autor <b>".$row_info[3]."</b></p>";
          echo "<p>Tytuł <b>".$row_info[2]."</b></p>";
          echo "<p>Kategoria <b>".$row_info[6]."</b></p>";
          echo "<p>Rok wydania <b>".$row_info[5]."</b></p>";
          echo "<p>Liczba stron <b>".$row_info[4]."</b></p>";
          echo "<p>ISBN <b>".$row_info[1]."</b></p>";
          echo "<br>";
          echo "<p><b>Opis </b><br>".$row_info[7]."</p>";
        };
      }


echo '
<br>
<br>
<br>
<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>
</div><!--/hero_unit-->
</div><!--/span-->
';
include("templ_scripts/after_content_template.php");

mysql_close($id_conn);
?>
