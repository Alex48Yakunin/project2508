<?php

require_once "../config.php";
session_start();

if( !isset($_SESSION['cart']) ) { 
    $_SESSION['cart'] = array();
}

$count_cart = count ($_SESSION['cart']);

$collection = (((isset($_GET['collection'])) && $_GET['collection'] !== "")?$_GET['collection']:false);
$category_id = (((isset($_GET['category_id'])) && $_GET['category_id'] !== "")?$_GET['category_id']:false);
$order_id = (((isset($_GET['order_id'])) && $_GET['order_id'] !== "")?$_GET['order_id']:false);
$title = (((isset($_REQUEST['title'])) && $_REQUEST['title'] !== "")?$_REQUEST['title']:false);
$price_min = (((isset($_REQUEST['price_min'])) && $_REQUEST['price_min'] !== "")?$_REQUEST['price_min']:false);
$price_max = (((isset($_REQUEST['price_max'])) && $_REQUEST['price_max'] !== "")?$_REQUEST['price_max']:false);
$page = (((isset($_REQUEST['page'])) && $_REQUEST['page'] !== "")?$_REQUEST['page']:false);

$limit_products = LIMIT_PAGE;

require_once '../models/Product.php';
$site_page_title = 'Каталог товаров';
$data = Product::getAll($collection, $category_id, $order_id, $title, $price_min, $price_max, $page, $limit_products);
$products = $data['products'];
$count_products = $data['count'];
$max_price = $data['max_price'];
$min_price = $data['min_price'];


require_once '../models/Collection.php';
$collection_id = new Collection($collection);

require_once '../models/Category.php';
$categories = Category::getAll(); 

require_once '../models/Size.php';
$sizes = Size::getAll(); 

require_once '../views/catalog.php';
