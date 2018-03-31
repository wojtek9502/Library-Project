<?php
echo '

<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Biblioteka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biblioteka">
    <meta name="author" content="Wojtek Kłusek">
    <link rel="icon" href="img/lib-icon.ico">

    <link href="bootstrap/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/style.css" rel="stylesheet">
    <link href="bootstrap/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="index.php">Biblioteka</a>
            <div class="nav-collapse collapse">
                <p class="navbar-text pull-right">
                     <a href="sign_in.php" class="navbar-link ">Zaloguj się</a>
                </p>
                <ul class="nav">
                    <li><a href="regulations.php">Regulamin</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                    <li><a href="register.php">Zarejestruj się</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row-fluid">

        <!--MENU PO LEWEJ-->
        <div class="span2">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Menu</li>
                    <li><a href="catalog.php">Katalog Online</a></li>
                    <!--<li><a href="https://getbootstrap.com/2.3.2/examples/fluid.html#">Link</a></li>-->
                    <!--<li><a href="https://getbootstrap.com/2.3.2/examples/fluid.html#">Link</a></li>-->
                    <!--<li><a href="https://getbootstrap.com/2.3.2/examples/fluid.html#">Link</a></li>-->
                    <a href="tmpUser.php">tmp user</a>
                </ul>

                <br>
                <br>

                <div class="text-center" id="hours">
                    <h4>Godziny otwarcia</h4>
                        <ul>
                            <li>pon-pt: 8:00 - 18:00</li>
                            <li>sob: 9:00 - 16:00</li>
                            <li id="sunday">niedz: 10:00 - 16:00</li>
                            <br>
                            <p id="day_name">Data js</p>
                            <p id="time"></p>
                        </ul>
                </div>
            </div><!--/.well -->
        </div><!--/span-->

';?>
