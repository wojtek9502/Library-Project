<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );
$copy_status = htmlspecialchars( isset($_POST['copy_status']) ? $_POST['copy_status'] : '' );

include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$sql = "INSERT INTO copy(id, book_id, status)
        VALUES ('', '{$book_id}', '{$copy_status}')";

if ( ($book_id=="" || $copy_status=="") || ($book_id=="" && $copy_status=="")) {
   echo '<p>Nie wybrano ksiazki lub/i statusu kopii</p>';
   $return_link = "lib_add_copy_search.php".$_SESSION['search_copy_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem
   echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
}else{
  $result = mysql_query($sql);
  if(!$result) echo 'błąd dodania kopii do bazy';
  else{
    //Jak wszystko ok to wypisz zarejestrowanego
    echo "<h2>Dodano kopie książki</h2>";
    echo "<p>id książki ".$book_id."</p>";
    echo "<p>status książki ".$copy_status."</p>";
    echo "<br>";

    echo '<a class="btn" href="lib_add_copy_menu_page.php">Wróć do poprzedniej strony</a>';
  }
}




include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
