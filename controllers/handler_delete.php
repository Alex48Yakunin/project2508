<?php
require_once '../models/Product.php';
$product_id = $_GET['product_id'];

$product = new Product($product_id);
$product->delete();
header('Location: admin_products_list.php');
