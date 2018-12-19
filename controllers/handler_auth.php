<?php

require_once '../models/User.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($login) && !empty($pass)) {
    $user = User::getByEmail($email);
    $hash = $user->pass;
    if(password_verify($pass, $hash)) {
        header('Location: catalog.php');
    } else {
        header('Location: auth.php');
    }
} else {
    header('Location: auth.php');
    exit;
}
