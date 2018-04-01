<?php
echo '

<!DOCTYPE html>
<html lang="pl"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Biblioteka">
  <meta name="author" content="Wojciech Kłusek">
  <link rel="icon" href="img/lib-icon.ico">

  <title>Zaloguj się</title>
  <link href="scripts/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="scripts/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin" action="login.php" method="POST">
  <h1 class="h3 mb-3 font-weight-normal">Logowanie</h1>
  <label for="login" class="sr-only">Login</label>
  <input type="text" id="login" class="form-control" placeholder="login" autofocus="" name="login">
  <label for="pass" class="sr-only">Hasło</label>
  <input type="password" id="pass" class="form-control" placeholder="Hasło" name="pass">

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
