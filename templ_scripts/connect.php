<?php
$user = 'root';
$password = '';
$database = 'library';

$id_conn = mysql_connect('localhost', $user, $password);
if($id_conn == false) die ('Błąd połączenia z bazą danych');
@mysql_select_db($database) or die("Nie udało się wybrać bazy danych");
?>
