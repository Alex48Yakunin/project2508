<?php

require_once 'config.php';


$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$mysqli->set_charset('utf8');

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}

// //собрать строку из случайных символов - стырено, но понятно
// function randomString($length) { 
//     $keys = array_merge(range(0,9), range('a', 'z'));

//     $key = "";
//     for($i=0; $i < $length; $i++) {
//         $key .= $keys[mt_rand(0, count($keys) - 1)];
//     }
//     return $key;
// }
