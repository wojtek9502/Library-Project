<?php
$password = 'admin';
$options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
$hash = password_hash($password, PASSWORD_BCRYPT, $options);


if (password_verify($password, $hash)) {
    echo $hash;
} else {
    echo 'Invalid password.';
}

?>
