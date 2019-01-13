<?php

$type_error = $_REQUEST["error"];

switch ($type_error){
    case 404: 
        $error_text = 'Такая странциа не найдена';
        break;
    case 403:
        $error_text = 'Такого товара нет или он был удален';
        break;
}

require_once "../views/error.php";
