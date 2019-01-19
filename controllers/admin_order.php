<?php

session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: auth.php?error=3');
}

if($_SESSION['role'] != 1) {
    header('Location: error.php?error=403');
}

require_once "../models/Order.php";
require_once "../models/User.php";

$order_id = addslashes($_GET['order_id']);

$order = new Order($order_id);

$users = User::getAll();

$orders = array([1]);

require_once "../views/admin_order.php";
 