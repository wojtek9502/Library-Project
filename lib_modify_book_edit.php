<?php
$book_id = htmlspecialchars( isset($_POST['book_id']) ? $_POST['book_id'] : '' );

include "/templ_scripts/connect.php";
include "/templ_scripts/before_content_template.php";
$return_link = "lib_modify_book_search.php".$_SESSION['search_book_get_link']; //utworzenie linku powrotnego do strony z wyszukaniem

// pobranie dotychczasowych danych ksiazki
$query = "SELECT * from book WHERE id={$book_id}";
$result = mysql_query($query);
if(!$result) echo 'BLAD zapytania ksiazki z bazy!';
  else{
      $row = mysql_fetch_row($result);
  }




echo '

<!--CONTENT-->
<div class="span9">
    <div class="hero-unit text-center ">
    <a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>
    <br>
    <br>
        <h2>Modyfikuj książkę</h2>

      <!-- Modyfikuj KSIAZKE -->



                <form class="form-inline" action="lib_modify_book_menu_result.php" method="POST" onsubmit="return confirm_dialog()">
                  <div class="form-group">
                    <input type="text" class="form-control" id="book_id" name="book_id" value="'.$row[0].'"  style="display:none">
                  </div>
                  <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" class="form-control" id="author" name="author"  value="'.$row[3].'" autofocus="" required="">
                  </div>

                  <div class="form-group">
                    <label for="title">Tytuł:</label>
                    <input type="text" class="form-control" id="title" name="title" value="'.$row[2].'" required="">
                  </div>

                  <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="'.$row[1].'" required="">
                  </div>

                  <div class="form-group">
                    <label for="pages">Liczba stron:</label>
                    <input type="text" class="form-control" id="pages" name="pages" value="'.$row[4].'" required="">
                  </div>

                  <div class="form-group">
                    <label for="publish_year">Rok wydania:</label>
                    <input type="date" class="form-control" id="publish_year" name="publish_year" value="'.date("Y-m-d", strtotime($row[5])).'" required="">
                  </div>

                  <div class="form-group">
                    <label for="category">Kategoria:</label>
                    <input type="text" class="form-control" id="category" name="category" value="'.$row[6].'" required="">
                  </div>

                  <div class="form-group">
                    <label for="book_descript">Opis:</label>
                    <textarea rows="4" cols="70" class="form-control" id="book_descript" name="book_descript" required="">'.$row[7].'</textarea>
                  </div>

                  <div class="form-group">
                    <label for="img_link">Link do obrazka:</label>
                    <input type="text" class="form-control" id="img_link" name="img_link" value="'.$row[8].'" required="">
                  </div>
                  <p>Ważne żeby link kończył się jako ".jpg" lub ".png"<p>
                  <br>
                  <button type="submit" class="btn btn-default">Zmodyfikuj książkę</button>
                </form>

                <br>

                <a class="btn" href="'.$return_link.'">Wróć do poprzedniej strony</a>
      </div><!--/hero_unit-->
  </div><!--/span-->
';


include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
