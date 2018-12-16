<?php
$admin_page_title = 'Создание товара';
require_once '../models/Product.php';
require_once '../models/Collection.php';
$collections = Collection::getAll();

require_once '../views/admin_product_create.php';