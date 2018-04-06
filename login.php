<?php
$login_from_form = $_POST['login'];
$pass_from_form = $_POST['pass'];
$correct_login_pass = false;
$login_as_reader = false;
$login_as_librarian = false;
#echo $login_from_form .' '. $pass_from_form;

session_start();
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$result = mysql_query("SELECT * FROM user");
if(!$result) echo 'BLAD zapytania loginow z bazy!';
else
{
	while($row = mysql_fetch_row($result)) #przeszukaj baze
	{
    #echo $row[0] .' '. $row[1] .' '. $row[2] .' '. $row[3];
		$login_from_db = $row[1];
		$pass_from_db = $row[2];

    if ( ($login_from_db == $login_from_form) && ($pass_from_db == $pass_from_form)) {
      $correct_login_pass = true;
      $_SESSION['user'] = $row[4] .' '. $row[5];
      $_SESSION['user_id'] = $row[0];
      $_SESSION['user_view'] = $row[3];
      echo "<h2>Poprawne Dane</h2>";
      echo '<b>Zalogowano jako '.$_SESSION["user"].'</b>';
      echo '<a class="btn" href="../index.php">Wróć do strony głównej</a>';
    }
	}; #koniec przeszukiwania bazy

  if(!$correct_login_pass){
    echo '<h2>Niepoprawne dane logowania'.'</h2>';
    echo '<a class="btn" href="../login_form.php">Wróć do strony logowania</a>';
    echo '<a class="btn" href="../index.php">Wróć do strony głównej</a>';
  }
}
include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
