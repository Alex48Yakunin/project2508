<?php

require_once "../models/Product.php";

if (isset($_GET['product_id']) && $_GET['product_id'] != "") {
    $product = new Product($_GET['product_id']);
} else {
    header('Location: ../views/404error.php');
}

$site_page_title = $product->title;
$product_id = $product->id;

require_once "../models/Size.php";
$sizes = Size::getAll($product_id);

require_once "../views/product.php";
