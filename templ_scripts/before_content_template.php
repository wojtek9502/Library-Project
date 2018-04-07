<?php
if (!isset($_SESSION))
{
  session_start();
}
echo '

<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Biblioteka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Biblioteka">
    <meta name="author" content="Wojtek Kłusek">
    <link rel="icon" href="img/lib-icon.ico">

    <link href="scripts/bootstrap.css" rel="stylesheet">
    <link href="scripts/style.css" rel="stylesheet">
    <link href="scripts/bootstrap-responsive.css" rel="stylesheet">
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
                    <ul class="nav">
                    <li><a href="regulations.php">Regulamin</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
';
                    if(!isset($_SESSION['user']))
                    {
                       echo '<li><a href="register_form.php">Zarejestruj się</a></li>';
                       echo '<li><a href="login_form.php">Zaloguj się</a></li>';
                    }
                    else
                    {
                       echo '<li><a href="user_panel.php">Twój profil</a></li>';
                       echo '<li><a href="logout.php">Wyloguj się</a></li>';
                   }
echo '
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
';

                      if(isset($_SESSION["user"]) && $_SESSION["user_view"]=="LIBRARIAN")
                      {
                        echo '<li class="nav-header">Zarządzaj biblioteką</li>';
                        echo '<li><a href="lib_add_del_books_menu_page.php">Dodaj/usuń książkę</a></li>';
                        echo '<li><a href="lib_give_take_book.php">Wypozyczanie oddawanie ksiazki</a></li>';
                        echo '<li><a href="lib_payments.php">Regulacja zaległych płatności</a></li>';
                        echo '<li><a href="lib_manage_users.php">Zarządzaj użytkownikami</a></li>';
                      }
echo '

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
