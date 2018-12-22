<?php

session_start();

if( !isset($_SESSION['cart']) ) { 
    $_SESSION['cart'] = array();
    }

$count_cart = count ($_SESSION['cart']);

$collection = (((isset($_GET['collection'])) && $_GET['collection'] !== "")?$_GET['collection']:false);
$category_id = (((isset($_GET['category_id'])) && $_GET['category_id'] !== "")?$_GET['category_id']:false);
$order_id = (((isset($_GET['order_id'])) && $_GET['order_id'] !== "")?$_GET['order_id']:false);

require_once '../models/Product.php';
$site_page_title = 'Каталог товаров';
$products = Product::getAll($collection, $category_id, $order_id);
$price = array();
foreach ($products as $key => $product) {
    $price[$key] = $product->price;
}
$max_price = max($price);
$min_price = min($price);

require_once '../models/Collection.php';
$collection_id = new Collection($collection);

require_once '../models/Category.php';
$categories = Category::getAll(); 

require_once '../models/Size.php';
$sizes = Size::getAll(); 

require_once '../views/catalog.php';
