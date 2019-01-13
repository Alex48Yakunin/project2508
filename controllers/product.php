<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=3');
}

if( !isset($_SESSION['cart']) ) { 
    $_SESSION['cart'] = array();
}

$count_cart = count ($_SESSION['cart']);

require_once "../models/Product.php";

if (isset($_GET['product_id']) && $_GET['product_id'] != "") {
    $product = new Product($_GET['product_id']);
    if ($product->id === null){
        header('Location: ../controllers/error.php?error=403');
    }
} else {
    header('Location: ../controllers/error.php?error=403');
}

$site_page_title = $product->title;
$product_id = $product->id;

require_once "../models/Size.php";
$sizes = Size::getAll($product_id);

require_once "../views/product.php";
