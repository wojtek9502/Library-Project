<?php
if (!isset($_SESSION))
{
  session_start();
}
session_destroy();

echo 'Wylogowałeś się';
echo '<a class="btn" href="../login_form.php">Wróć do strony logowania</a>';
echo '<a class="btn" href="../index.php">Wróć do strony głównej</a>';

?>
