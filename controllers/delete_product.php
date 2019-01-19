<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=3');
}
if ($_SESSION['role'] !==1) {
    header('Location: error.php?error=403');
}

$admin_page_title = 'Удалить?';

$product_id = $_GET['product_id'];

require_once '../views/delete_product.php';
