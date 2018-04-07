<?php
include("/templ_scripts/before_content_template.php");


echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Dodaj Kopie książki</h2>
                <h6>Najpierw wyszukaj książkę</h6>
                <br>
                <form class="form-inline" action="lib_add_copy_search.php" method="GET">
';
                  //pasek wyszukiwania
                  include("/templ_scripts/search_bar.php");
echo '
                </form>
              </div><!--/hero_unit-->
          </div><!--/span-->
';
include("/templ_scripts/after_content_template.php");
?>
