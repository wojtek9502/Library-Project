<?php
include("/templ_scripts/before_content_template.php");

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center">
                <h2>Katalog</h2>
                <br>

                <form class="form-inline" action="catalog_search.php" method="GET">
                      <label class="mr-sm-2" for="search_label">Wyszukaj</label>
                      <input type="text" id="search_label" name="search" required="">

                      <label class="mr-sm-2" for="search_select">Szukaj po</label>
                       <select class="custom-select mb-2 mr-sm-2 mb-sm-0" name="search_filter" id="search_filter">
                         <option selected value="all">Wszystko</option>
                         <option value="author">Autor</option>
                         <option value="title">Tutuł</option>
                       </select>

                      <button type="submit" class="btn btn-primary">Szukaj</button>
                </form>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div><!--/hero_unit-->
        </div><!--/span-->



';

include("/templ_scripts/after_content_template.php");
?>
