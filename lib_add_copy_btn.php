<?php
include "/templ_scripts/connect.php";
$result = mysql_query("SELECT id, author, title FROM book");
if(!$result) die('BLAD zapytania ksiazek z bazy!');
echo '


<!-- DODAJ KOPIE -->
<div id="add_copy" style="display: none">
    <h6>Najpierw znajdź książkę</h6>
    <form class="form-inline" action="/lib_add_copy_btn_result.php" method="POST">

      <div class="form-group">
        <label for="book_id">Wybierz książkę</label>
					<select class="custom-select" name="book_id" id="book_id">
';
			//dodanie ksiazki i autora do comboboxa
			while($row = mysql_fetch_row($result)) #przeszukaj baze
			{
				$book_id = $row[0];
				$book_author = $row[1];
				$book_title = $row[2];
				echo "<option value=".$book_id.">".$book_author." - ".$book_title."</option>";
			};

echo '
					</select>
      </div>

      <div class="form-group">
      <label for="copy_status">Wybierz status</label>
        <select class="custom-select" name="copy_status" id="copy_status">
          <option selected value="WOLNE">WOLNE</option>
          <option value="DOSTEPNE NA MIEJSCU">DOSTĘPNE NA MIEJSCU</option>
        </select>
      </div>

      <br>
      <button type="submit" class="btn btn-default">Dodaj kopię</button>
    </form>
</div>
';
mysql_close($id_conn);

 ?>
