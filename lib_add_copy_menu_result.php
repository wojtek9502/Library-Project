<?php
$book_id = htmlspecialchars($_POST['book_id']);
$copy_status = htmlspecialchars($_POST['copy_status']);


include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$sql = "INSERT INTO copy(id, book_id, status)
        VALUES ('', '{$book_id}', '{$copy_status}')";
$result = mysql_query($sql);
if(!$result) echo 'błąd dodania kopii do bazy';
else{
  //Jak wszystko ok to wypisz zarejestrowanego
  echo "<h2>Dodano kopie książki</h2>";
  echo "<br>";
  echo '<a class="btn" href="lib_add_copy_menu_page.php">Wróć do poprzedniej strony</a>';
}


include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
