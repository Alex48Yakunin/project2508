<?php

session_start();

$count_cart = count ($_SESSION['cart']);

$site_page_title = 'Главная';

require_once '../views/main_page.php';