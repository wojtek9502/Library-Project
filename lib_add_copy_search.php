<?php
include "templ_scripts/search_book_rules.php";
include "templ_scripts/connect.php";
include "templ_scripts/before_content_template.php";
$_SESSION['search_copy_get_link'] = "?search=".$search."&search_filter=".$search_filter;  //zapisanie atrybutow wyszukiwania aby moc potem wrocic gdy zle wyszukiwanie

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Dodaj egzemplarz książki</h2>
                <h6>Najpierw wyszukaj książkę</h6>
                <br>
                <form class="form-inline" action="lib_add_copy_search.php" method="GET">
';
                  //pasek wyszukiwania
                  include("templ_scripts/search_bar.php");
echo '
                </form>

                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                  <form action="lib_add_copy_menu_result.php" method="POST" onsubmit="return confirm_dialog()">
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">Id książki</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Status</th>
                            <th scope="col">Dodaj kopie</th>
                        </tr>
                        </thead>
                        <tbody>


                ';
                //link powrotny dla strony dodawania kopii
                $row_nr=0;
                $result = mysql_query($query);
                if(!$result) echo 'BLAD zapytania katalogu z bazy!';
                  else
                  {
                        while($row = mysql_fetch_row($result))
                        {
                          $row_nr++;
                          echo '<tr>';
                          echo '<th scope="row">'.$row[0].'</th>';
                          echo '<td>'.$row[2].'</td>';
                          echo '<td>'.$row[1].'</td>';
                          echo '
                                  <td>
                                   <label><input type="radio" name="copy_status" value="WOLNE" required="">Wolne</label>
                                   <label><input type="radio" name="copy_status" value="DOSTĘPNE NA MIEJSCU" required="">Dostępne na miejscu</label>
                                   </td>
                                <td><label><input type="radio" name="book_id" value="'.$row[0].'" required=""></label></td>
                          ';

                        };
                  } #else end

                echo '


                    </tbody>
                    </table>
                    <br>
                    <input type="submit" value="Dodaj egzemplarz książki">
                </form>
                </div>
              </div>
';

include("templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
