<?php

include "/templ_scripts/search_copy_advanced_rules.php";
include "/templ_scripts/connect.php";
include '/templ_scripts/before_content_template.php';
// zmienne pobierane z pierwszego includa
$_SESSION['catalog_search_back_link'] = "?search_author=".$search_author."&search_title=".$search_title."&search_category=".$search_category;

echo '
        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
            <h2>Katalog</h2>
            <h5>Proszę wypełnić przynajmniej jedno pole</h5>
            <form class="form-inline" action="catalog_search.php" method="GET" >
';
                //pasek wyszukiwania
                include("/templ_scripts/search_bar_advanced.php");
echo '
            </form>

            <form action="catalog_search_book_detail.php" method="POST">
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
                            <th scope="col">Działanie</th>
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
                          echo '<td>
                                  <label><input type="radio" name="book_id" value="'.$row[7].'" required=""></label>
                                </td>';
                        };
                  } #else end

        echo '
                    </tbody>
                    </table>
                    <input type="submit" value="Zobacz szczegóły kopii">
              </div>
            </div>

            </form>
';


include '/templ_scripts/after_content_template.php';
mysql_close($id_conn);

?>
