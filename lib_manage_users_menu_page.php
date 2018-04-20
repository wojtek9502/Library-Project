<?php
include("/templ_scripts/before_content_template.php");

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center">
                <h2>Zarządzaj użytkownikami</h2>
                <p>Najpierw wyszukaj użytkownia</p>
                <form class="form-inline" action="lib_manage_users_menu_page_search.php" method="GET">

                <label class="mr-sm-2" for="search_label">Wyszukaj</label>
                <input type="text" id="search_label" name="search" required="">


                <button type="submit" class="btn btn-primary">Szukaj</button>
                </form>
            </div><!--/hero_unit-->
        </div><!--/span-->


';

include("/templ_scripts/after_content_template.php");
?>
