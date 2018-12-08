<?php

require_once '../models/Product.php';
$site_page_title = 'Каталог товаров';
$products = Product::getAll();
require_once '../views/catalog.php';
