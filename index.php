<?php

include("/templ_scripts/before_content_template.php");
include "/templ_scripts/connect.php";

$book_rank = "SELECT id,
              RANK() OVER (ORDER BY id) AS ROW_NUMBER
              FROM copy;"

echo '

<!--CONTENT-->
<div class="span9">
    <div class="hero-unit">
        <h2>Witamy w bibliotece</h2>
        <ul>
            <li><p>Jeśli nie masz konta zarejestruj się.</p></li>
            <li><p>Gdy już je założysz, zaloguj się, przejdź do Katalogu Online by przejrzeć książki w bibliotece.</p></li>
            <li><p>Możesz też sprawdzić wypożyczone książki klikając na nazwę swojego użytkownika po prawej stronie górnego menu.</p></li>
        </ul>
';

echo '



    </div>
</div><!--/row-->

</div><!--/span-->

';

include("/templ_scripts/after_content_template.php");
mysql_close($id_conn);
?>
