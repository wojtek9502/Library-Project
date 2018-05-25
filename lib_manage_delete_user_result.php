<?php

include "templ_scripts/connect.php";
include 'templ_scripts/login_before_content_template.php';

$user_id_to_del = $_SESSION['user_id_in_manage_panel'];


$sql = "DELETE FROM user
        WHERE id={$user_id_to_del}";

//zapytanie o informacje o dodanej ksiazce
$info_query = "SELECT id, name, surname, address, post_code, city
               FROM user
               WHERE id = {$user_id_to_del}";
$info_query_result = mysql_query($info_query);
  if(!$info_query_result) die('<h2>Błąd zapytania informacyjnego o userze</h2>');


//usuwanie usera
  $result = mysql_query($sql);
  if(!$result) die('błąd usuniecia usera bazy');
  else{
    //Jak wszystko ok to wypisz info
    while($row_info = mysql_fetch_row($info_query_result))
    {
      echo "<h2>Usunieto użytkownika</h2>";
      echo "<p>Id: <b>".$row_info[0]."</b></p>";
      echo "<p>Imie i nazwisko: <b>".$row_info[1]." ".$row_info[2]."</b></p>";
      echo "<p>Adres: <b>".$row_info[3]." ".$row_info[4]." ".$row_info[5]."</b></p>";

      echo "<br>";
    };
  }

echo '<a class="btn" href="index.php">Wróć do strony głównej</a>';

include 'templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
