<?php

$error = isset($_GET['error']) ? $_GET['error'] : '0';
$error_title = '';

switch ($error) {
    case '0': break;
    case '1': $error_title = 'Пустой пароль или логин'; break;
    case '2': $error_title = 'Неправильный логин или пароль'; break;
    case '3': $error_title = 'Что-то пошло не так. Пожалуйста, авторизуйтесь.'; break;
    default: $error_title = 'Неизвестная ошибка<br>'; 
}

require_once '../views/auth.php';
