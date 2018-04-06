<?php
$login = htmlspecialchars($_POST['login']);
$pass = htmlspecialchars($_POST['pass']);
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$post_code = htmlspecialchars($_POST['post_code']);
$city = htmlspecialchars($_POST['city']);
$phone = htmlspecialchars($_POST['phone']);
// echo $login .' '. $pass .' '. $name .' '. $surname .' '. $email .' '. $address .' '. $post_code .' '. $city .' '. $phone;

$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
$hash_password = password_hash($pass, PASSWORD_BCRYPT, $options);


include "/templ_scripts/connect.php";
include '/templ_scripts/login_before_content_template.php';

$sql = "INSERT INTO user
        VALUES ('', '{$login}', '{$hash_password}', 'READER', '{$name}', '{$surname}', '{$address}', '{$post_code}', '{$city}',  '{$phone}')";
$result = mysql_query($sql);
if(!$result) echo 'błąd zapytania';
else{
  //Jak wszystko ok to wypisz zarejestrowanego
  echo "<h2>Zarejestrowano</h2>";
  echo "Imie <b>".$name."</b>";
  echo "<br>";
  echo "Nazwisko <b>".$surname."</b>";
  echo "<br>";
  echo "Login <b>".$login."</b>";
  echo "<br>";
  echo "<br>";
  echo '<a class="btn" href="../index.php">Wróć do strony głównej i zaloguj się.</a>';
}

include '/templ_scripts/login_after_content_template.php';
mysql_close($id_conn);
 ?>
