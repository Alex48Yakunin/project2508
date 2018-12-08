<?php

require_once "../models/Product.php";

$product = new Product($_GET['product_id']);
$site_page_title = $product->title;

require_once "../views/product.php";

