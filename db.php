<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'shop2508';

$mysqli = new mysqli($host, $user, $password, $db);
$mysqli->set_charset('utf8');

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}
