<?php

session_start();

$product_id = addslashes($_GET['product_id']);
$size_id = addslashes($_GET['size_id']);

if( !isset($_SESSION['cart']) ) { 
    $_SESSION['cart'] = array();
    }
$i=count($_SESSION ['cart'])+1;

$_SESSION ['cart'][$i]['product_id'] = $product_id;
$_SESSION ['cart'][$i]['size_id'] = $size_id;

// var_dump($_SESSION);