<?php
include "/templ_scripts/connect.php";
include "/templ_scripts/before_content_template.php";

$search = htmlspecialchars($_GET['search']);
$query = "SELECT name, surname, address, post_code, city, phone, view, id
          FROM user
          WHERE name LIKE '%{$search}%'
             OR surname LIKE '%{$search}%'
             OR address LIKE '%{$search}%'
             OR city LIKE '%{$search}%'
             OR phone LIKE '%{$search}%'
             OR CONCAT(name,' ',surname) LIKE '%{$search}%'
          ";


echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center">
                <h2>Zarządzaj użytkownikami</h2>
                <p>Najpierw wyszukaj użytkownia</p>
                <form class="form-inline" action="lib_manage_users_menu_page_search.php" method="GET">

                <label class="mr-sm-2" for="search_label">Wyszukaj</label>
                <input type="text" id="search_label" name="search" required="">
                <button type="submit" class="btn btn-primary">Szukaj</button>
                </form>

            <form action="lib_manage_users_menu_page_result.php" method="GET">
                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Imie</th>
                            <th scope="col">Nazwisko</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Kod pocztowy</th>
                            <th scope="col">Miasto</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Rola</th>
                            <th scope="col">Wybierz</th>
                        </tr>
                        </thead>
                        <tbody>


';

                $row_nr=0;
                $result = mysql_query($query);
                if(!$result) echo 'BLAD zapytania uzytkownikow z bazy!';
                  else
                  {
                        while($row = mysql_fetch_row($result))
                        {
                          $row_nr++;
                          echo '<tr>';
                          echo '<th scope="row">'.$row[7].'</th>';
                          echo '<td>'.$row[0].'</td>';
                          echo '<td>'.$row[1].'</td>';
                          echo '<td>'.$row[2].'</td>';
                          echo '<td>'.$row[3].'</td>';
                          echo '<td>'.$row[4].'</td>';
                          echo '<td>'.$row[5].'</td>';
                          echo '<td>'.$row[6].'</td>';
                          echo '<td>
                                  <label><input type="radio" name="user_id" value="'.$row[7].'"></label>
                                </td>';
                        };
                  } #else end
echo '

                  </tbody>
                  </table>

                  <input type="submit" value="Przejrzyj użytkownika">
              </form>
            </div><!--/hero_unit-->
        </div><!--/span-->
';

include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
