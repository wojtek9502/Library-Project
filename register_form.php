<?php
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
</head>

<body class="text-center">


<div class="container">
    <div class="row">
        <h2>Zarejestruj się</h2>

        <form class="form-horizontal" action="/register.php" methode="POST">
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
                        <input type="text" class="form-control" id="login" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Hasło-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pwd">Hasło</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" id="pwd" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Hasło ponownie-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="pwd_confirm">Potwierdź hasło</label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" id="pwd_confirm" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <br>
                <br>

                <!--Imie-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Imie</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="name" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Nazwisko-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="surname">Nazwisko</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="surname" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Email-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Email</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="email" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Adres-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="address">Adres</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="address" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Kod pocztowy-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="post_code">Kod pocztowy</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="post_code" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Miasto-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="city">Miasto</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="city" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Miasto-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="phone">Telefon</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="phone" required="">
                        <span class="help-block"> </span>
                    </div>
                </div>

                <!--Warunki-->
                <div class="col-sm-12 form-check">
                    <input class="form-check-input" type="checkbox" value="" id="acptChectbox" required="">
                    <label class="form-check-label" for="acptChectbox">
                        Akceptuje <a href="regulations.html" target="_blank">Regulamin</a>
                    </label>
                </div>
                <br>
                <br>
                <br>

                <div class="col-sm-12">
                    <button type="submit" class="btn btn btn-success">Zarejestruj się</button>
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
