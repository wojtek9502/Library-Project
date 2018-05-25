<?php
if (!isset($_SESSION))
{
  session_start();
}
session_destroy();

include 'templ_scripts/login_before_content_template.php';
echo '
    <h2>Wylogowałeś się</h2>
    <a class="btn" href="../index.php">Wróć do strony głównej</a>
    <a class="btn" href="../login_form.php">Wróć do strony logowania</a>

';

include 'templ_scripts/login_after_content_template.php';
?>
