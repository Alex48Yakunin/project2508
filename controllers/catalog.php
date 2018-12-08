<?php

$collection = (((isset($_GET['collection'])) && $_GET['collection'] !== "")?$_GET['collection']:false);
$category_id = (((isset($_GET['category_id'])) && $_GET['category_id'] !== "")?$_GET['category_id']:false);
$order_id = (((isset($_GET['order_id'])) && $_GET['order_id'] !== "")?$_GET['order_id']:false);

require_once '../models/Product.php';
$site_page_title = 'Каталог товаров';
$products = Product::getAll($collection, $category_id, $order_id);

require_once '../views/catalog.php';
