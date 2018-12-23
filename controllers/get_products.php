<?php

$collection = (((isset($_REQUEST['collection'])) && $_REQUEST['collection'] !== "")?$_REQUEST['collection']:false);
$category_id = (((isset($_REQUEST['category_id'])) && $_REQUEST['category_id'] !== "")?$_REQUEST['category_id']:false);

require_once '../models/Product.php';
require_once '../models/Category.php';
require_once '../models/Collection.php';

$site_page_title = 'Каталог товаров';
$products = Product::getAll($collection, $category_id);

foreach($products as $product) {
    $category = new Category($product->category_id);
    $product->category_id = $category->title;
    $collection = new Collection($product->collection);
    $product->collection = $collection->title;
}

echo json_encode($products);
