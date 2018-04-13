<?php
$copy_id = htmlspecialchars( isset($_POST['copy_id']) ? $_POST['copy_id'] : '' );
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';
$return_link = "lib_del_copy_search.php".$_SESSION['search_copy_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem

$sql = "DELETE FROM copy
        WHERE id={$copy_id}";

if ( $copy_id=="") {
   echo '<p>Nie wybrano kopii ksiazki</p>';
   echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
}else{
  $result = mysql_query($sql);
  if(!$result) echo 'błąd usuniecia kopii ksiazki z bazy';
  else{
    //Jak wszystko ok to wypisz zarejestrowanego
    echo "<h2>Usunięto kopie książki</h2>";
    echo "<p>id kopii książki ".$copy_id."</p>";
    echo "<br>";

    echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
  }
}
