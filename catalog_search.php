<?php

include "/templ_scripts/search_rules.php";
include "/templ_scripts/connect.php";
include '/templ_scripts/before_content_template.php';


echo '
        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
                <h2>Katalog</h2>
                <br>
';
              //pasek wyszukiwania
              include("/templ_scripts/search_bar.php");
echo '

                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Data wydania (RRRR-MM-DD)</th>
                            <th scope="col">Kategoria</th>
                            <th scope="col">Liczba stron</th>
                            <th scope="col">Nr. egzemplarza</th>
                            <th scope="col">Status</th>
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
                          echo '<td>'.$row[0].'</td>';
                          echo '<td>'.$row[1].'</td>';
                          echo '<td>'.$row[2].'</td>';
                          echo '<td>'.$row[3].'</td>';
                          echo '<td>'.$row[4].'</td>';
                          echo '<td>'.$row[5].'</td>';
                          echo '<td>'.$row[6].'</td>';
                        };
                  } #else end

        echo '
                    </tbody>
                    </table>
              </div>
            </div>
';


include '/templ_scripts/after_content_template.php';
mysql_close($id_conn);

?>
