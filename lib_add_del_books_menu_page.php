<?php



include("/templ_scripts/before_content_template.php");

echo '
        <!--CONTENT-->
        <div class="span9">
            <div class="hero-unit text-center ">
                <h2>Dodaj/usuń książkę</h2>
                <h5>Co chcesz zrobić?</h5>


                <div class="btn-group">
                  <button type="button" class="btn" onclick="show_content(\'add_book\')">Dodać książkę</button>
                  <button type="button" class="btn" onclick="show_content(\'add_copy\')">Dodać egzemplarz</button>
                  <button type="button" class="btn" onclick="show_content(\'del_book\')">Usunąć książkę</button>
                  <button type="button" class="btn" onclick="show_content(\'del_copy\')">Usunąć egzemplarz</button>
                </div>
                <br>
                <br>

';
                              //dodanie poszczegolnych zawartosci pod przyciski
                              include("lib_add_book_btn.php");
                              include("lib_add_copy_btn.php");
echo '




                <div id="del_copy" style="display: none">
                  usun egz
                </div>

                <div id="del_book" style="display: none">
                  del book
                </div>

            </div><!--/hero_unit-->
        </div><!--/span-->

<script src="scripts/show_hide_content.js"></script>
';

include("/templ_scripts/after_content_template.php");
?>
