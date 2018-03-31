<?php
include("/templ_scripts/before_content_template.php");

echo '


        <!--CONTENT-->
        <div class="span10">
            <div class="hero-unit text-center">
                <h3>Panel użytkownika</h3>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Adam Mickiewicz</td>
                            <td>Dziady</td>
                            <td>2018-02-20</td>
                            <td>2018-04-20</td>
                            <td>Prolongowane</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Adam Mickiewicz</td>
                            <td>Pan Tadeusz</td>
                            <td>2018-03-10</td>
                            <td>2018-04-10</td>
                            <td>Wypożyczone</td>
                            <td> <button type="button" class="btn-outline-primary">Prolonguj</button> </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Witold Gombrowicz</td>
                            <td>Ferdydurke</td>
                            <td>2018-01-20</td>
                            <td>2018-02-20</td>
                            <td id="afterTime">SPÓŻNIENIE<br> Skontaktuj się z biblioteką</td>
                            <td></td>
                        </tr>
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
                            <th scope="col">Data oddania (RRRR-MM-DD)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Juliusz Słowacki</td>
                            <td>Kordian</td>
                            <td>200</td>
                            <td>2017-01-20</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Stanisław Lem</td>
                            <td>Kongres Futurologiczny</td>
                            <td>150</td>
                            <td>2015-01-20</td>
                        </tr>
                        </tbody>
                    </table>

                    <p>Bazując na oddanych książkach przeczytałeś/ąś      stron<p>

            </div>
        </div>

';
include("/templ_scripts/after_content_template.php");
?>
