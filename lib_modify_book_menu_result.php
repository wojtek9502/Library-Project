<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );
$author = htmlspecialchars( isset($_POST['author']) ? $_POST['author'] : '' );
$title = htmlspecialchars( isset($_POST['title']) ? $_POST['title'] : '' );
$isbn = htmlspecialchars( isset($_POST['isbn']) ? $_POST['isbn'] : '' );
$pages = htmlspecialchars( isset($_POST['pages']) ? $_POST['pages'] : '' );
$publish_year = htmlspecialchars( isset($_POST['publish_year']) ? $_POST['publish_year'] : '' );
$category = htmlspecialchars( isset($_POST['category']) ? $_POST['category'] : '' );
$book_descript = htmlspecialchars( isset($_POST['book_descript']) ? $_POST['book_descript'] : '' );
$img_link = htmlspecialchars( isset($_POST['img_link']) ? $_POST['img_link'] : '' );

include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';
$return_link = "lib_modify_book_search.php".$_SESSION['edit_link_back']; //utworzenie linku powrotnego do strony z wyszukaniem


$sql = "UPDATE book
        SET isbn= '{$isbn}', author = '{$author}', title= '{$title}',
            pages= '{$pages}', publish_year= '{$publish_year}', category= '{$category}',
            book_descript= '{$book_descript}', img_link= '{$img_link}'
        WHERE id = {$book_id};";


    //liczba kopii ksiazki
    $result = mysql_query($sql);
    if(!$result) die('Błąd modyfikacji ksiazki');
    else {
      echo "<h2>Zmodyfikowano książkę</h2>";
      echo "<p>id książki <b>".$book_id."</b></p>";
      echo "<p>Autor <b>".$author."</b></p>";
      echo "<p>Tytuł <b>".$title."</b></p>";
      echo "<p>Kategoria <b>".$category."</b></p>";
      echo "<p>Rok wydania <b>".$publish_year."</b></p>";
      echo "<p>ISBN <b>".$isbn."</b></p>";
      echo "<p>Liczba stron <b>".$pages."</b></p>";
      echo "<p>Opis książki <b>".$book_descript."</b></p>";
      echo "<p>Link do obrazka <b>".$img_link."</b></p>";


      echo '<a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>';
      echo "<br>";
    }

include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
