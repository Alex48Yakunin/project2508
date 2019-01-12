<?php
require_once "../config.php";
$price = array();
$collection = (((isset($_REQUEST['collection'])) && $_REQUEST['collection'] !== "")?$_REQUEST['collection']:false);
$category_id = (((isset($_REQUEST['category_id'])) && $_REQUEST['category_id'] !== "")?$_REQUEST['category_id']:false);
$order_id = (((isset($_REQUEST['order_id'])) && $_REQUEST['order_id'] !== "")?$_REQUEST['order_id']:false);
$title = (((isset($_REQUEST['title'])) && $_REQUEST['title'] !== "")?$_REQUEST['title']:false);
$price_min = (((isset($_REQUEST['price_min'])) && $_REQUEST['price_min'] !== "")?$_REQUEST['price_min']:false);
$price_max = (((isset($_REQUEST['price_max'])) && $_REQUEST['price_max'] !== "")?$_REQUEST['price_max']:false);
$page = (((isset($_REQUEST['page'])) && $_REQUEST['page'] !== "")?$_REQUEST['page']:false);

$limit_products = LIMIT_PAGE;

// $collection = false;
// $category_id = false;
// $title = "мя";
// $price_min = 500;
// $price_max = 3000;
// $page = 1;

require_once '../models/Product.php';
require_once '../models/Category.php';
require_once '../models/Collection.php';

$site_page_title = 'Каталог товаров';
$data = Product::getAll($collection, $category_id, $order_id, $title, $price_min, $price_max, $page, $limit_products);
// $products = $data['products'];
// $count_orders = $data['count'];

// var_dump ($data);


foreach($products as $product) {
    $category = new Category($product->category_id);
    $product->category_id = $category->title;
    $collection = new Collection($product->collection);
    $product->collection = $collection->title;
}

echo json_encode($products);