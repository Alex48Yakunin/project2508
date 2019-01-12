<?php



require_once '../models/Product.php';
$product_id = $_REQUEST['product_id'];
$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];
$collection = $_REQUEST['collection'];
$category = $_REQUEST['category'];

$product = new Product($product_id);
$product->update($title, $description, $image, $price, $category_id, $collection);

header('Location: admin_products_list.php');
