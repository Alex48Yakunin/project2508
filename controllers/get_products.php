<?php
$price = array();
$collection = (((isset($_REQUEST['collection'])) && $_REQUEST['collection'] !== "")?$_REQUEST['collection']:false);
$category_id = (((isset($_REQUEST['category_id'])) && $_REQUEST['category_id'] !== "")?$_REQUEST['category_id']:false);
$order_id = (((isset($_REQUEST['order_id'])) && $_REQUEST['order_id'] !== "")?$_REQUEST['order_id']:false);
$title = (((isset($_REQUEST['title'])) && $_REQUEST['title'] !== "")?$_REQUEST['title']:false);
$price_min = (((isset($_REQUEST['price_min'])) && $_REQUEST['price_min'] !== "")?$_REQUEST['price_min']:false);
$price_max = (((isset($_REQUEST['price_max'])) && $_REQUEST['price_max'] !== "")?$_REQUEST['price_max']:false);

// $collection = 2;
// $category_id = 2;
// $title = "га";
// $price_min = 1000;
// $price_max = 2000;

require_once '../models/Product.php';
$site_page_title = 'Каталог товаров';
$products = Product::getAll($collection, $category_id, $order_id, $title, $price_min, $price_max);

// var_dump ($products);

echo json_encode($products);