<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=3');
}

require_once "../models/Product.php";

$product = new Product($_GET['product_id']);
$site_page_title = $product->title;
$product_id = $product->id;

require_once "../models/Size.php";
$sizes = Size::getAll($product_id);


require_once "../views/product.php";
