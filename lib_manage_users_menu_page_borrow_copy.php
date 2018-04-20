<?php
///wypozyczanie ksiazki uzytkownikowi
include("/templ_scripts/before_content_template.php");
include("/templ_scripts/connect.php");

$user_id = $_SESSION['user_id_in_manage_panel'];

$user_info_query = "SELECT name, surname, address, city
          FROM user
          WHERE id = {$user_id}";


//pobranie informacji o uzytkowniku
$user_info_result = mysql_query($user_info_query);
if(!$user_info_result) die('BLAD zapytania uzytkownika z bazy!');

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Wypozycz ksiazke</h2>
                <h6>Wypożyczenie dla użytkownika</h6>

';
              //pasek info o userze
              include("/templ_scripts/user_info_table.php");
  echo '

                <br>
              <h6>Najpierw wyszukaj książkę</h6>

                <form class="form-inline" action="lib_manage_users_menu_page_borrow_copy_search.php" method="GET">
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
              </div><!--/hero_unit-->
          </div><!--/span-->
';
include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
