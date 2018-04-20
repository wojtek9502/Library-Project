<?php

include "/templ_scripts/search_copy_to_borrow_rules.php";
include "/templ_scripts/connect.php";
include '/templ_scripts/before_content_template.php';
$_SESSION['link_to_back'] = "?search=".$search."&search_filter=".$search_filter;  //zmienne pochodza z search_copy_to_borrow_rules.php


echo '
        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
                <h2>Katalog</h2>
                <br>
';
                    //pasek info o userze
                    include("/templ_scripts/user_info_table.php");
echo '

                <form class="form-inline" action="lib_manage_users_menu_page_borrow_copy_search.php" method="POST">

                <label class="mr-sm-2" for="search_label">Wyszukaj</label>
                <input type="text" id="search_label" name="search" required="">

                <label class="mr-sm-2" for="search_select">Szukaj po</label>
                 <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="search_filter" id="search_filter">
                   <option selected value="all">Wszystko</option>
                   <option value="author">Autor</option>
                   <option value="title">Tutuł</option>
                   <option value="category">Kategoria</option>
                 </select>

                <button type="submit" class="btn btn-primary">Szukaj</button>

                </form>


            <form action="lib_manage_users_menu_page_borrow_copy_result.php" method="POST">
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
                            <th>Wybierz</th>
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
                          echo '<td>'.$row[5].'</td>';  //copy_id
                          echo '<td>'.$row[6].'</td>';
                          echo '<td>
                                  <label><input type="radio" name="copy_id" value="'.$row[5].'" required=""></label>
                                </td>';
                        };
                  } #else end

        echo '
                    </tbody>
                    </table>
                      <input type="submit" value="Wypożycz książkę">
                  </form>
              </div>
            </div>
';


include '/templ_scripts/after_content_template.php';
mysql_close($id_conn);

?>
