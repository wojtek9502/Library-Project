<?php

$user_id = $_SESSION['user_id_in_manage_panel'];
$user_info_query = "SELECT name, surname, address, city
          FROM user
          WHERE id = {$user_id}";

//pobranie informacji o uzytkowniku
$user_info_result = mysql_query($user_info_query);
if(!$user_info_result) die('BLAD zapytania uzytkownika z bazy!');

echo '
<div class="user_info_table">
    <table class="table table-striped" >
      <thead>
      <tr>
          <th>Typ danych</th>
          <th>Dane</th>
      </tr>
      </thead>

';
      while($row = mysql_fetch_row($user_info_result))
      {
echo '
        <tr>
          <td><b>Imie i Nazwisko<b></td>
          <td>'.$row[0].' '.$row[1].' </td>
        </tr>
        <tr>
          <td><b>Adres<b></td>
          <td>'.$row[2].'</td>
        </tr>
        <tr>
          <td><b>Miasto<b></td>
          <td>'.$row[3].'</td>
        </tr>
';
      }; //endo of while
echo'
      </tbody>
      </table>
  </div>
';
 ?>
