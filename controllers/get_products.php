<?php
require_once '../models/Product.php';

$products = Product::getAll(false, false, false);
echo json_encode($products);
