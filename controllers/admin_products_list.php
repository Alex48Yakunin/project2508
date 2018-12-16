<?php
$admin_page_title = 'Список товаров';
require_once '../models/Product.php';
require_once '../models/Collection.php';
$collections = Collection::getAll();
require_once '../models/Category.php';
$categories = Category::getAll();

$products = Product::getAll(false, false, false);

require_once '../views/admin_products_list.php';