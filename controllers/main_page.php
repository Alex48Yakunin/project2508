<?php

session_start();

if( !isset($_SESSION['cart']) ) { 
    $_SESSION['cart'] = array();
}

$count_cart = count ($_SESSION['cart']);

$site_page_title = 'Главная';

require_once '../views/main_page.php';