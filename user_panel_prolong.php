<?php
include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';
$copy_id = htmlspecialchars( isset($_POST['copy_id']) ? $_POST['copy_id'] : '' );

$get_cur_date = "SELECT give_date FROM borrowings WHERE copy_id={$copy_id}";
$result = mysql_query($get_cur_date);
  if(!$result) die('Błąd pobrania daty oddania ksiazki z bazy');
  else {
    while($row = mysql_fetch_row($result))
    {
      $next_mth_date = date('Y-m-d', strtotime("+1 month", strtotime($row[0])));
    };
  }

//zmien date oddania
$set_date= "UPDATE borrowings
        SET give_date = DATE_FORMAT('{$next_mth_date}', '%Y-%m-%d')
        WHERE copy_id= {$copy_id}";
$result = mysql_query($set_date);
  if(!$result) die ('błąd zmiany daty oddania ksiazki do bazy');

//ustaw kopie ksiazki jako prolongowna
$set_copy_status = "UPDATE copy
        SET status = 'PROLONGOWANA'
        WHERE id= {$copy_id}";
$result = mysql_query($set_copy_status);
  if(!$result) die ('błąd zmiany statusu ksiazki jako prolongowanej');


    echo "<h2>Prolongowano książkę</h2>";
    echo "<br>";

    echo '<a class="btn" href="user_panel.php">Wróć do poprzedniej strony</a>';

include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
?>
