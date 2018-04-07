<?php
include "/templ_scripts/search_book_rules.php";
include "/templ_scripts/connect.php";
include "/templ_scripts/before_content_template.php";
echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Dodaj kopie książki</h2>
                <h6>Najpierw wyszukaj książkę</h6>
                <br>
                <form class="form-inline" action="lib_add_copy_search.php" method="GET">
';
                  //pasek wyszukiwania
                  include("/templ_scripts/search_bar.php");
echo '
                </form>
                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                  <form action="lib_add_copy_menu_result.php" method="POST">
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Status</th>
                            <th scope="col">Dodaj kopie</th>
                        </tr>
                        </thead>
                        <tbody>


                ';
                $row_nr=0;
                $result = mysql_query($query);
                if(!$result) echo 'BLAD zapytania katalogu z bazy!';
                  else
                  {
                        while($row = mysql_fetch_row($result))
                        {
                          $row_nr++;
                          echo '<tr>';
                          echo '<th scope="row">'.$row_nr.'</th>';
                          echo '<td>'.$row[2].'</td>';
                          echo '<td>'.$row[1].'</td>';
                          echo '
                                  <td>
                                   <select name="book_status">
                                      <option value="WOLNE">WOLNE</option>
                                      <option value="DOSTEPNE NA MIEJSCU">DOSTEPNE NA MIEJSCU</option>
                                   </select>
                                   </td>
                                <td><label><input type="radio" name="radio" value="'.$row[0].'"></label></td>
                          ';

                        };
                  } #else end

                echo '


                    </tbody>
                    </table>
                    <br>
                    <button type="button" class="btn">Dodaj</button>
                </form>
                </div>
              </div>
';

include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
