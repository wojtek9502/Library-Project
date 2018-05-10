<?php
include "/templ_scripts/search_borrowed_copies_rules.php";
include "/templ_scripts/connect.php";
include "/templ_scripts/before_content_template.php";

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Zobacz wypożyczone egzemplarze książki</h2>
                <h6>Najpierw wyszukaj książkę lub użytkownika</h6>
                <br>
                <form class="form-inline" action="lib_see_borrowed_books_search.php" method="POST">
';
                  //pasek wyszukiwania
                  include("/templ_scripts/search_bar_with_user_option.php");
echo '
                </form>
                <br>
                <h6>Kliknij na nagłówek kolumny aby posortować.</h6>
                    <table class="table table-striped sortable text-center">
                        <thead>
                        <tr>
                            <th scope="col">Autor</th>
                            <th scope="col">Tytuł</th>
                            <th scope="col">Data wypożyczenia <br>(YYYY-MM-DD)</th>
                            <th scope="col">Data oddania <br>(YYYY-MM-DD)</th>
                            <th scope="col">Imie i nazwisko <br>użytkownika</th>
                            <th scope="col">Telefon</th>
                        </tr>
                        </thead>
                        <tbody>


                ';
                $result = mysql_query($query);
                if(!$result) echo 'BLAD zapytania katalogu z bazy!';
                  else
                  {
                        while($row = mysql_fetch_row($result))
                        {
                          echo '<tr>';
                          echo '<td>'.$row[1].'</td>';
                          echo '<td>'.$row[2].'</td>';
                          echo '<td>'.$row[4].'</td>';
                          echo '<td>'.$row[5].'</td>';
                          echo '<td>'.$row[6], ' ', $row[7].'</td>';
                          echo '<td>'.$row[8].'</td>';
                        };
                  } #else end

                echo '


                    </tbody>
                    </table>
                    <br>
                </div>
              </div>
';

include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
