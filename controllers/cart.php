<?php

session_start();


require_once '../models/Product.php';

require_once '../models/Size.php';

$count_cart = count ($_SESSION['cart']);

$site_page_title = 'Корзина';

$cart = array();


require_once "../views/cart.php";
