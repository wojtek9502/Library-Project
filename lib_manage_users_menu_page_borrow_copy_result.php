<?php
// rezultat wypozyczenia ksiazki

///oddawanie kopi ksiazki
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$return_link = "lib_manage_users_menu_page_borrow_copy_search.php".$_SESSION['link_to_back']; //utworzenie linku powrotnego do strony z wyszukaniem
$user_id = htmlspecialchars( isset($_SESSION['user_id_in_manage_panel'] ) ? $_SESSION['user_id_in_manage_panel']  : '' );
$copy_id = htmlspecialchars($_POST['copy_id']);

//zapytanie na zmiane statusu pozyczanej kopii ksiazki na WYPOZYCZONE
$set_copy_status_query = "UPDATE copy
                          SET status = 'WYPOZYCZONE'
                          WHERE id = {$copy_id}";
$result = mysql_query($set_copy_status_query);
  if(!$result) die('błąd ustawienia statusu pozycznej ksiazki na pozyczone');


//zapytanie na wstawienie kopii ksiazki jako pozyczonej w panelu usera
//ale najpierw pobranie ksiazki do ktorej nalezy kopia
$get_book_id_query = "SELECT book_id from copy WHERE id = {$copy_id}";
$result = mysql_query($get_book_id_query);
if(!$result) die('błąd pobrania id_ksiazki wg jej kopii');
else
{
      while($row = mysql_fetch_row($result))
      {
        $book_id = $row[0]; //id ksiazki dla kopii
      };
} #else end

$today = date('Y-m-d', strtotime('now'));
$next_mth_date = date('Y-m-d', strtotime("+1 month", strtotime('now')));
$insert_book_to_history = "INSERT INTO borrowings(id, copy_id, user_id, borrow_date, give_date, book_id)
                           VALUES ('', '{$copy_id}', '{$user_id}', '{$today}', '{$next_mth_date}', '{$book_id}')";

$result = mysql_query($insert_book_to_history);
  if(!$result) die('błąd dodania ksiazki do wypozyczonych przez usera, w bazie');



    echo "<h2>Wypozyczono książkę</h2>";
    echo "<p>Id usera ".$user_id."</p>";
    echo "<p>id kopii ".$copy_id."</p>";
    echo "<br>";

    echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
