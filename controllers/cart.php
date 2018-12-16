<?php

session_start();

$count_cart = count ($_SESSION['cart']);

require_once '../models/Product.php';

require_once '../models/Size.php';

require_once '../models/Collection.php';

$site_page_title = 'Корзина';

$cart_view = array();


foreach ($_SESSION['cart'] as $key => $cart) {
    $product = new Product($cart['product_id']);
    $size = new Size ($cart['size_id']);
    $collection = new Collection ($product->collection);
    $cart_view[$key]['title'] = $product->title;
    $cart_view[$key]['image'] = $product->image;
    $cart_view[$key]['price'] = $product->price;
    $cart_view[$key]['collection'] = $collection->title;
    $cart_view[$key]['size'] = $size->value;
    $cart_view[$key]['count'] = $cart['count'];
 }

 
require_once "../views/cart.php";
