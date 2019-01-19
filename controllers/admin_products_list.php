<?php
$admin_page_title = 'Список товаров';

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=3');
}
if ($_SESSION['role'] !==1) {
    header('Location: error.php?error=403');
}

require_once '../models/Product.php';
require_once '../models/Collection.php';
$collections = Collection::getAll();
require_once '../models/Category.php';
$categories = Category::getAll();

$products = Product::getAll(false, false, false);

require_once '../views/admin_products_list.php';