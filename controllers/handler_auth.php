<?php

require_once '../models/User.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($email) && !empty($pass)) {
    $user = User::getByEmail($email);
    $hash = $user->pass;

    if(password_verify($pass, $hash)) {

        if($user->role == 1) {
            header('Location: admin_orders.php');
        } else {
            header('Location: catalog.php');
        }

    } else {
        header('Location: auth.php');
    }

} else {
    header('Location: auth.php');
    exit;
}
