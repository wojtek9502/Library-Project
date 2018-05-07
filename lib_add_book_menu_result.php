<?php
$isbn = htmlspecialchars($_POST['isbn']);
$title = htmlspecialchars($_POST['title']);
$author = htmlspecialchars($_POST['author']);
$pages = htmlspecialchars($_POST['pages']);
$publish_year = htmlspecialchars($_POST['publish_year']);
$category = htmlspecialchars($_POST['category']);
$book_descript = htmlspecialchars($_POST['book_descript']);
$img_link = htmlspecialchars($_POST['img_link']);

include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$sql = "INSERT INTO book(id, isbn, title, author, pages, publish_year, category, book_descript, img_link)
        VALUES ('', '{$isbn}', '{$title}', '{$author}', '{$pages}', '{$publish_year}', '{$category}', '{$book_descript}', '{$img_link}')";
$result = mysql_query($sql);
if(!$result) echo 'błąd dodania ksiazki do bazy';
else{
  //Jak wszystko ok to wypisz zarejestrowanego
  echo "<h2>Dodano książkę</h2>";
  echo "Autor <b>".$author."</b>";
  echo "<br>";
  echo "Tytuł <b>".$title."</b>";
  echo "<br>";
  echo "Liczba stron <b>".$pages."</b>";
  echo "<br>";
  echo "Rok publikacji <b>".$publish_year."</b>";
  echo "<br>";
  echo "Kategoria <b>".$category."</b>";
  echo "<br>";
  echo "Kategoria <b>".$book_descript."</b>";
  echo "<br>";
  echo "Kategoria <b>".$img_link."</b>";
  echo "<br>";
  echo "<br>";
  echo '<a class="btn" href="lib_add_book_menu_page.php">Wróć do poprzedniej strony</a>';
}


include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
