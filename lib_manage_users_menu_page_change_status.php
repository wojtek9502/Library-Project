<?php
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$return_link = "lib_manage_users_menu_page_result.php".$_SESSION['link_to_back']; //utworzenie linku powrotnego do strony z wyszukaniem
$user_id = htmlspecialchars( isset($_SESSION['user_id_in_manage_panel'] ) ? $_SESSION['user_id_in_manage_panel']  : '' );
$new_status = htmlspecialchars($_POST['user_status']);

$user_info_query = "SELECT name, surname, id
          FROM user
          WHERE id = {$user_id}";
//pobranie informacji o uzytkowniku
$user_info_result = mysql_query($user_info_query);
  if(!$user_info_result) die('BLAD zapytania uzytkownika z bazy!');

$sql = "UPDATE user
        SET view = '{$new_status}'
        WHERE id = {$user_id}";


  $result = mysql_query($sql);
  if(!$result) echo 'błąd zmiany statusu usera w bazie bazy';
  else{
    //Jak wszystko ok to wypisz zarejestrowanego
    $user_info_row = mysql_fetch_row($user_info_result);

    echo "<h2>Zmieniono status</h2>";
    echo "<p>Id usera <b>".$user_info_row[2]."</b></p>";
    echo "<p>Imie i nazwisko <b>".$user_info_row[0]." ".$user_info_row[1]."</b></p>";
    echo "<p>Nowy status <b>".$new_status."</b></p>";
    echo "<br>";

    echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
  }
