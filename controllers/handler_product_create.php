<?php
require_once '../models/Product.php';

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);
$title = $data['title'];
$description = $data['description'];
$price = $data['price'];
$collection = $data['collection'];
$category_id = $data['category_id'];
$product = Product::add($title, $description, '1.jpg', $price, $category_id, $collection);
