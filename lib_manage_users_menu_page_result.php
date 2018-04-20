<?php
include("/templ_scripts/before_content_template.php");
include("/templ_scripts/connect.php");
$user_id = htmlspecialchars($_GET['user_id']);

$_SESSION['user_id_in_manage_panel'] = $user_id;
$_SESSION['link_to_back'] = "?user_id=".$user_id;  //zapisanie atrybutow wyszukiwania aby moc potem wrocic gdy zle wyszukiwanie


$query = "SELECT borrowings.id, borrowings.copy_id, borrowings.book_id, borrowings.user_id, book.author, book.title, borrowings.borrow_date, borrowings.give_date, copy.status
          FROM borrowings
          INNER JOIN copy ON borrowings.copy_id=copy.id
          INNER JOIN book ON borrowings.book_id=book.id
          WHERE borrowings.user_id=".$user_id."";

$query_history = "SELECT book.author, book.title, book.pages, book.category, borrowings_history.give_date FROM borrowings_history
                  INNER JOIN book ON borrowings_history.book_id=book.id
                  WHERE borrowings_history.user_id=".$user_id."";

$user_info_query = "SELECT name, surname, address, post_code, city, phone, id, user, view
          FROM user
          WHERE id = {$user_id}";

$cost_per_day = 0.2; //20gr za kazdy dzien spoznienia oddania ksiazki
$to_pay=0.0;

//pobranie informacji o uzytkowniku
$user_info_result = mysql_query($user_info_query);
if(!$user_info_result) echo 'BLAD zapytania uzytkownika z bazy!';


echo '


        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
                <h3>Tryb bibliotekarza</h3>
                <br>
                <h4>Informacje o użytkowniku</h4>
          <form action="lib_manage_users_menu_page_change_status.php" method="POST">
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
                <td><b>Id<b></td>
          			<td>'.$row[6].' </td>
          		</tr>
          		<tr>
                <td><b>Imie i Nazwisko<b></td>
          			<td>'.$row[0].' '.$row[1].' </td>
          		</tr>
          		<tr>
                <td><b>Adres<b></td>
          			<td>'.$row[2].' </td>
          		</tr>
          		<tr>
                <td><b>Kod pocztowy<b></td>
          			<td>'.$row[3].' </td>
          		</tr>
          		<tr>
                <td><b>Miasto<b></td>
          			<td>'.$row[4].' </td>
          		</tr>
          		<tr>
                <td><b>Telefon<b></td>
          			<td>'.$row[5].' </td>
          		</tr>
              <tr>
                <td><b>Login<b></td>
                <td>'.$row[7].' </td>
              </tr>
              <tr>
                <td><b>Status<b></td>
          			<td>'.$row[8].' </td>
          		</tr>
          		<tr>
                <td><b>Zmien status na<b></td>
          			<td>
                  <label><input type="radio" name="user_status" value="READER" checked="">Czytelnik</label>
                  <label><input type="radio" name="user_status" value="LIBRARIAN">Bibliotekarz</label>
                  <input type="submit" value="Zmien status">
                </td>
          		</tr>
';
            }; //endo of while
echo'

            </tbody>
            </table>
          </div>
          </form> <!-- end user info form-->


              <br>
              <br>
                <h4>Aktualnie wypożyczone</h4>
                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>

                <form action="lib_manage_users_menu_page_give_copy.php" method="POST">
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Książka</th>
                            <th scope="col">Nr kopii</th>
                            <th scope="col">Data wypozyczenia (RRRR-MM-DD)</th>
                            <th scope="col">Oddaj do (RRRR-MM-DD)</th>
                            <th scope="col">Status</th>
                            <th scope="col">Kara</th>
                            <th scope="col">Działanie</th>
                        </tr>
                        </thead>
                        <tbody>

';
                $row_nr=0;
                $result = mysql_query($query);
                if(!$result) echo 'BLAD zapytania ksiazek z bazy!';
                  else
                  {
                        while($row = mysql_fetch_row($result))
                        {
                          $row_nr++;
                          echo '<tr>';
                          echo '<th scope="row">'.$row_nr.'</th>';
                          echo '<td>'.$row[4].'</td>';
                          echo '<td>'.$row[5].'</td>';
                          echo '<td>'.$row[1].'</td>';
                          echo '<td>'.$row[6].'</td>';
                          echo '<td>'.$row[7].'</td>';
                          echo '<td>'.$row[8].'</td>';


                          //obliczanie daty
                          $today = strtotime(date('Y-m-d', strtotime('now')));
                          $give_date = strtotime(date('Y-m-d', strtotime($row[7])));
                          $secs = $give_date - $today;
                          $days = abs($secs / 86400);

                          if($give_date >= $today ){  //gdy nie minal czas na oddanie
                            echo '<td></td>';
                          }
                          else {
                            $to_pay += $days*$cost_per_day;
                            echo '<td>Nie oddano ksiazki w terminie. Spóżnienie o '.$days.' dni. Kara: '.$days*$cost_per_day.' PLN</td>';
                          }

                          //radio button z numerem kopii
                          echo '<td>
                                  <label><input type="radio" name="copy_id" value="'.$row[1].'" required=""></label>
                                </td>';
                        };
                  } #else end

echo '
                    </tbody>
                    </table>
                    <p id="to_pay">Razem do zapłaty: '.$to_pay.' PLN za zaległe książki</p>

                    <br>
                    <h4>Wypożyczanie/oddawanie książki</h4>
                  <input type="submit" value="Oddaj książkę">
                </form>                                              <!--end current borrowed form -->


                <!--Wypozyczanie ksiazki -->
                <form action="lib_manage_users_menu_page_borrow_copy.php" method="POST">

                  <input type="submit" value="Wypożycz książkę">
                </form>



                    <!--HISTORIA WYPOZYCZEŃ-->

                    <br>
                <h4>Historia wypożyczeń</h4>
                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Książka</th>
                            <th scope="col">Liczna stron</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Data oddania (RRRR-MM-DD)</th>
                        </tr>
                        </thead>
                        <tbody>
';
                    $row_nr=0;
                    $pages_counter = 0;
                    $result = mysql_query($query_history);
                    if(!$result) echo 'BLAD zapytania historii ksiazek z bazy!';
                      else
                      {
                            while($row = mysql_fetch_row($result))
                            {
                              $row_nr++;
                              echo '<tr>';
                              echo '<th scope="row">'.$row_nr.'</th>';
                              echo '<td>'.$row[0].'</td>';
                              echo '<td>'.$row[1].'</td>';
                              echo '<td>'.$row[2].'</td>'; $pages_counter+=$row[2];
                              echo '<td>'.$row[3].'</td>';
                              echo '<td>'.$row[4].'</td>';
                            };
                      } #else end
echo '
                        </tbody>
                    </table>

                    <p>Bazując na oddanych książkach przeczytałeś/ąś '.$pages_counter.' stron</p>

            </div>
        </div>

';
include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);

?>
