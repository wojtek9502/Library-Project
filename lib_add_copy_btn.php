<?php

echo '

<!-- DODAJ KOPIE -->
<div id="add_copy" style="display: none">
    <h6>Najpierw znajdź książkę</h6>
    <form class="form-inline" action="/lib_add_copy_result.php" method="POST">

      <div class="form-group">
        <label for="book_name">Wybierz książkę</label>
        <input type="text" class="form-control" id="book_name" name="book_name" required="">
      </div>

      <div class="form-group">
      <label for="copy_status">Wybierz status</label>
        <select class="custom-select" name="copy_status" id="book_status">
          <option selected value="WOLNE">WOLNE</option>
          <option value="DOSTĘPNE NA MIEJSCU">DOSTĘPNE NA MIEJSCU</option>
        </select>
      </div>

      <br>
      <button type="submit" class="btn btn-default">Dodaj kopię</button>
    </form>
</div>

';

 ?>
