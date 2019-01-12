<?php
require_once '../models/User.php';

session_start();

if(isset($_REQUEST['email']) && isset($_REQUEST['pass']) && isset($_REQUEST['pass2'])) {
    $email = $_REQUEST['email'];
    $pass = $_REQUEST['pass'];
    $pass2 = $_REQUEST['pass2'];

    if($pass == $pass2) {
        $user = User::register($email, $pass);
        $user = User::getByEmail($email);
        $_SESSION['user_id'] = $user->user_id;
        $_SESSION['name'] = $user->name;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;
        header('Location: catalog.php');
    } else {
        header('Location: form_reg.php?error=2');
    }
} else {
    header('Location: form_reg.php?error=1');
}
