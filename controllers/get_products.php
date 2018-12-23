<?php

$collection = (((isset($_REQUEST['collection'])) && $_REQUEST['collection'] !== "")?$_REQUEST['collection']:false);
$category_id = (((isset($_REQUEST['category_id'])) && $_REQUEST['category_id'] !== "")?$_REQUEST['category_id']:false);

require_once '../models/Product.php';
$site_page_title = 'Каталог товаров';
$products = Product::getAll($collection, $category_id);

echo json_encode($products);
