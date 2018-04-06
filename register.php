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

echo $login .' '. $pass .' '. $name .' '. $surname .' '. $email .' '. $address .' '. $post_code .' '. $city .' '. $phone;
include "/templ_scripts/connect.php";


mysql_close($id_conn);
 ?>
