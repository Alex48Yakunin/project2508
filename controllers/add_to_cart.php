<?php

session_start();

$product_id = addslashes($_REQUEST['product_id']);
$size_id = addslashes($_REQUEST['size_id']);

if( !isset($_SESSION['cart']) ) { 
    $_SESSION['cart'] = array();
    $i=0;
    }

$count = 0;
foreach ($_SESSION['cart'] as $key => $cart) {
   if (($cart['product_id'] == $product_id) && ($cart['size_id'] == $size_id)) {
       $i=$key;
       $count = 1;
   }
   else {
    $i=count($_SESSION ['cart']);
   }
}

$_SESSION['cart'][$i]['product_id'] = $product_id;
$_SESSION['cart'][$i]['size_id'] = $size_id;
(($count == 1) ? $_SESSION ['cart'][$i]['count'] = $_SESSION ['cart'][$i]['count']+$count : $_SESSION ['cart'][$i]['count'] = 1);

// var_dump ($_SESSION);

echo true;
