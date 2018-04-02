<?php
include("/templ_scripts/before_content_template.php");
include("/templ_scripts/connect.php");


$query = "SELECT borrowings.id, borrowings.copy_id, borrowings.book_id, borrowings.user_id, book.author, book.title, borrowings.borrow_date, borrowings.give_date, copy.status
          FROM borrowings
          INNER JOIN copy ON borrowings.copy_id=copy.id
          INNER JOIN book ON borrowings.book_id=book.id
          WHERE borrowings.user_id=".$_SESSION['user_id']."";

$query_history = "SELECT book.author, book.title, book.pages, book.category, borrowings_history.give_date FROM borrowings_history
                  INNER JOIN book ON borrowings_history.book_id=book.id
                  WHERE borrowings_history.user_id=".$_SESSION['user_id']."";

echo '


        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
                <h3>Panel użytkownika '. $_SESSION["user"].'</h3>
                <br>
                <h4>Aktualnie wypożyczone</h4>
                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Książka</th>
                            <th scope="col">Data wypozyczenia (RRRR-MM-DD)</th>
                            <th scope="col">Oddaj do (RRRR-MM-DD)</th>
                            <th scope="col">Status</th>
                            <th scope="col">Prolonguj</th>
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
                          echo '<td>'.$row[6].'</td>';
                          echo '<td>'.$row[7].'</td>';
                          echo '<td>'.$row[8].'</td>';
                          echo '<td> <button type="button" class="btn-outline-primary">Prolonguj</button> </td>';
                        };
                  } #else end

echo '
                    </tbody>
                    </table>
                    <!--HISTORIA WYPOZYCZEŃ-->
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

                    <p>Bazując na oddanych książkach przeczytałeś/ąś '.$pages_counter.' stron<p>

            </div>
        </div>

';
include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);

?>
