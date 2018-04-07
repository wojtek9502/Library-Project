<?php
include("/templ_scripts/before_content_template.php");

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center">
                <h2>Katalog</h2>
                <br>
                <form class="form-inline" action="catalog_search.php" method="GET">
';
                    //pasek wyszukiwania
                    include("/templ_scripts/search_bar.php");
echo '
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
