<?php
$admin_page_title = 'Список товаров';
require_once '../models/Product.php';

$products = Product::getAll(false, false, false);

require_once '../views/admin_products_list.php';