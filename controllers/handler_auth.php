<?php

require_once '../models/User.php';

session_start();

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

        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;

    } else {
        header('Location: auth.php?error=2');
    }

} else {
    header('Location: auth.php?error=1');
    exit;
}
