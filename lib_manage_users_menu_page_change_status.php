<?php
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$return_link = "lib_manage_users_menu_page_result.php".$_SESSION['link_to_back']; //utworzenie linku powrotnego do strony z wyszukaniem
$user_id = htmlspecialchars( isset($_SESSION['user_id_in_manage_panel'] ) ? $_SESSION['user_id_in_manage_panel']  : '' );
$new_status = htmlspecialchars($_POST['user_status']);

$sql = "UPDATE user
        SET view = '{$new_status}'
        WHERE id = {$user_id}";


  $result = mysql_query($sql);
  if(!$result) echo 'błąd zmiany statusu usera w bazie bazy';
  else{
    //Jak wszystko ok to wypisz zarejestrowanego
    echo "<h2>Zmieniono status</h2>";
    echo "<p>Id usera ".$user_id."</p>";
    echo "<p>Nowy status ".$new_status."</p>";
    echo "<br>";

    echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
  }
