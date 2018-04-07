<?php
echo '

<!-- DODAJ KSIAZKE -->
        <div id="add_book" style="display: none">
          <form class="form-inline" action="templ_scripts/lib_add_book_result.php" method="POST">
            <div class="form-group">
              <label for="author">Autor</label>
              <input type="text" class="form-control" id="author" name="author" autofocus="" required="">
            </div>

            <div class="form-group">
              <label for="title">Tytuł:</label>
              <input type="text" class="form-control" id="title" name="title" required="">
            </div>

            <div class="form-group">
              <label for="isbn">ISBN:</label>
              <input type="text" class="form-control" id="isbn" name="isbn" required="">
            </div>

            <div class="form-group">
              <label for="pages">Liczba stron:</label>
              <input type="text" class="form-control" id="pages" name="pages" required="">
            </div>

            <div class="form-group">
              <label for="publish_year">Rok wydania:</label>
              <input type="date" class="form-control" id="publish_year" name="publish_year" required="">
            </div>

            <div class="form-group">
              <label for="category">Kategoria:</label>
              <input type="text" class="form-control" id="category" name="category" required="">
            </div>

            <br>
            <button type="submit" class="btn btn-default">Dodaj książkę</button>
          </form>
        </div>



';

 ?>
