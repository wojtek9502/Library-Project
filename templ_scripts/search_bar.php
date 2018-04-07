<?php
//jesli chcesz uzyc dodac <form> przed tym i </form> po tym
echo '

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
';

?>
