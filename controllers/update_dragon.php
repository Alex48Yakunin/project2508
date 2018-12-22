<?php
$admin_page_title = 'Изменить товар';
$product_id = $_GET['product_id'];

require_once '../models/Product.php';
require_once '../models/Collection.php';
$collections = Collection::getAll();
require_once '../models/Category.php';
$categories = Category::getAll();

$product = new Product($product_id);

require_once '../views/update_dragon.php';
