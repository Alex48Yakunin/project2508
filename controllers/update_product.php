<?php
$admin_page_title = 'Изменить товар';

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=3');
}
if ($_SESSION['role'] !==1) {
    header('Location: error.php?error=403');
}

$product_id = $_GET['product_id'];

require_once '../models/Product.php';
require_once '../models/Collection.php';
$collections = Collection::getAll();
require_once '../models/Category.php';
$categories = Category::getAll();

$product = new Product($product_id);

require_once '../views/update_product.php';
