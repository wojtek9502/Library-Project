<?php
if (!isset($_SESSION))
{
  session_start();
}
echo '
<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Biblioteka">
  <meta name="author" content="Wojciech Kłusek">
  <link rel="icon" href="img/lib-icon.ico">

  <title>Logowanie / Wylogowywanie</title>
  <link href="scripts/bootstrap.min.css" rel="stylesheet">
  <link href="scripts/signin.css" rel="stylesheet">
</head>
<body class="text-center">
<form class="form-signin">

';?>
