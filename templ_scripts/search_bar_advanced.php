<?php
//jesli chcesz uzyc dodac <form> przed tym i </form> po tym
echo '
    <div class="search_advanced_content">
      <input type="text" name="search_author" id="search_author" placeholder="Wpisz autora" onfocus="search_advanced_checker()" onchange="search_advanced_checker()" autofocus="">
      <br>
      <input type="text" name="search_title" id="search_title" placeholder="Wpisz tytuł" onfocus="search_advanced_checker()" onchange="search_advanced_checker()">
      <br>
      <input type="text" name="search_category" id="search_category" placeholder="Wpisz kategorie" onfocus="search_advanced_checker()" onchange="search_advanced_checker()">
      <br>
      <br>
      <button type="submit" id="search_button" class="btn btn-primary" disabled onmouseover="search_advanced_checker()">Szukaj w Katalogu</button>
      <br>
      <br>
      <p id="search_info"></p>
    </div>
';

?>
