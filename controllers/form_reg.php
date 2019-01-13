<?php

$site_page_title = 'Регистрация';

$error = isset($_GET['error']) ? $_GET['error'] : '0';
$error_title = '';

switch ($error) {
    case '0': break;
    case '1': $error_title = 'Форма не заполнена.'; break;
    case '2': $error_title = 'Пароли не совпадают.'; break;
    default: $error_title = 'Неизвестная ошибка.'; break;
}

require_once '../views/form_reg.php';
