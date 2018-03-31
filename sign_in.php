<?php
echo '

<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Biblioteka">
  <meta name="author" content="Wojciech Kłusek">
  <link rel="icon" href="img/lib-icon.ico">

  <title>Zaloguj się</title>
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="bootstrap/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin">
  <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" autofocus="">
  <label for="inputPassword" class="sr-only">Hasło</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Hasło">

  <button class="btn btn-lg btn-success btn-block" type="submit">Zaloguj się</button>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Zaloguj się przez Facebook</button>
  <br>
  <label>
    <a class="btn" href="index.php">Wróć do strony głównej</a>
  </label>
</form>


</body>
</html>

';

?>
