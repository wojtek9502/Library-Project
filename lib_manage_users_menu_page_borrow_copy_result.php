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

//zapytania dla wyswietlenia informacji na stronie
$user_info_query = mysql_query("SELECT name, surname, address, post_code, city FROM user WHERE id = {$user_id}");
  if(!$user_info_query) die('blad zapytania informacyjnego o userze z bazy');
$user_info_row = mysql_fetch_row($user_info_query);

$copy_info_query = mysql_query("SELECT copy.id, book.author, book.title FROM book Inner JOIN copy ON copy.book_id=book.id WHERE copy.id = {$copy_id}");
if(!$copy_info_query) die('blad zapytania informacyjnego o egzemplarzy z bazy');
$copy_info_row = mysql_fetch_row($copy_info_query);

//wyswietlenie informacji
    echo "<h2>Wypożyczono</h2>";
    echo "<p><b>dla użytkownika:</b></p>";
    echo "<p>Imie i nazwisko: <b>".$user_info_row[0]." ".$user_info_row[1]."</b></p>";
    echo "<p>Adres: <b>".$user_info_row[2].", ".$user_info_row[3].", ".$user_info_row[4]."</b></p>";

    echo "<br>";
    echo "<p><b>Egzemplarz książki: </b></p>";
    echo "<p>Nr egzemplarza: <b> ".$copy_info_row[0]."</b></p>";
    echo "<p>Autor: <b>".$copy_info_row[1]."</b></p>";
    echo "<p>Tytuł: <b>".$copy_info_row[2]."</b></p>";
    echo "<br>";

    echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
