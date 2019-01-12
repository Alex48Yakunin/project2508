<?php

session_start();

$postData = file_get_contents('php://input');

$cart_up = json_decode($postData, true);

$count=count($_SESSION ['cart']);

foreach ($cart_up as $key => $up) {
    $_SESSION['cart'][$key]['count'] = $up['count'];
}

echo true;
die;