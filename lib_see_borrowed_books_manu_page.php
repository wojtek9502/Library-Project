<?php
include("templ_scripts/before_content_template.php");


echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Zobacz wypożyczone egzemplarze książki</h2>
                <h6>Najpierw wyszukaj książkę lub użytkownika</h6>
                <br>
                <form class="form-inline" action="lib_see_borrowed_books_search.php" method="POST">
';
                  //pasek wyszukiwania
                  include("templ_scripts/search_bar_with_user_option.php");
echo '
                </form>
              </div><!--/hero_unit-->
          </div><!--/span-->
';
include("templ_scripts/after_content_template.php");
?>
