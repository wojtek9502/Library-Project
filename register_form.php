<?php

$usernames_array = "";
include "/templ_scripts/connect.php";

$result = mysql_query("SELECT user FROM user");
if(!$result) echo 'BLAD zapytania loginow z bazy!';
else
{
  while($row = mysql_fetch_row($result)) #przeszukaj baze
	{
		$usernames_array .= $row[0]; # .= do appendowania napisow
		$usernames_array .= " ";
	}; #koniec przeszukiwania bazy
}
mysql_close($id_conn);

echo '

<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Biblioteka">
    <meta name="author" content="Wojciech Kłusek">
    <link rel="icon" href="img/lib-icon.ico">

    <title>Zarejestruj się</title>
    <link href="scripts/bootstrap.min2.css" rel="stylesheet" id="bootstrap-css">
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/valid_confirm_pass.js"></script>
    <script src="scripts/valid_username_availability.js"></script>
    <script src="scripts/register_btn_state.js"></script>
</head>

<body class="text-center">


<div class="container">
    <div class="row">
        <h2>Zarejestruj się</h2>

        <form class="form-horizontal" action="register.php" method="POST">
            <fieldset>
                <legend></legend>

                <div class="col-sm-12">
                    <a class="btn" href="index.php">Wróć do strony głównej</a>
                </div>
                <br>
                <br>
                <br>

                <!--Login-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="login">Login</label>
                    <div class="col-md-4">
                        <input type="text" id="login" name="login"  onchange="valid_usernames(\''.$usernames_array.'\')"  class="form-control"  required="" autofocus="">
                        <span class="help-block"> </span>
                        <p id=login_availabillity></p>
                    </div>
                </div>

                <!--Hasło-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pass">Hasło</label>
                    <div class="col-md-4">
                        <input type="password" id="pass" name="pass" onchange="confirm_passwords()" class="form-control"  required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Hasło ponownie-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pass_confirm">Potwierdź hasło</label>
                    <div class="col-md-4">
                        <input type="password" id="pass_confirm" onchange="confirm_passwords()" class="form-control"  required="">
                        <span class="help-block"> </span>
                        <p id=confirm_status></p>
                    </div>
                </div>

                <br>
                <br>

                <!--Imie-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Imie</label>
                    <div class="col-md-4">
                        <input type="text" id="name" name="name" class="form-control"  required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Nazwisko-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="surname">Nazwisko</label>
                    <div class="col-md-4">
                        <input type="text" id="surname" name="surname" class="form-control"  required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Email-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-4">
                        <input type="text" id="email" name="email" class="form-control"  required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Adres-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="address">Adres</label>
                    <div class="col-md-4">
                        <input type="text" id="address" name="address" class="form-control" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Kod pocztowy-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="post_code">Kod pocztowy</label>
                    <div class="col-md-4">
                        <input type="text" id="post_code" name="post_code" class="form-control"  required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Miasto-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="city">Miasto</label>
                    <div class="col-md-4">
                        <input type="text"  id="city" name="city" class="form-control" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Miasto-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone">Telefon</label>
                    <div class="col-md-4">
                        <input type="text" id="phone" name="phone" class="form-control" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Warunki-->
                <div class="col-sm-12 form-check">
                    <input class="form-check-input" type="checkbox" value="" id="acptChectbox" required="">
                    <label class="form-check-label" for="acptChectbox">
                        Akceptuje <a href="regulations.php" target="_blank">Regulamin</a>
                    </label>
                </div>
                <br>
                <br>
                <br>

                <div class="col-sm-12">
                    <button type="submit" id="register_btn" class="btn btn btn-success">Zarejestruj się</button>
                </div>
                <br>
                <br>

                <div class="col-sm-12">
                    <a class="btn" href="index.php">Wróć do strony głównej</a>
                </div>

            </fieldset>
        </form>
        <br>
        <br>
        <br>
    </div>

</div>
</body>
</html>

';


?>
