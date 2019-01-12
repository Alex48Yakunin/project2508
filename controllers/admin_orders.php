<?php

require_once "../config.php";
require_once "../models/Order.php";
require_once "../models/User.php"; 

if (isset($_GET['status']) && $_GET['status'] != "") {
    $status = $_GET['status'];
} else {
    $status = false;
}
if (isset($_GET['user_id']) && $_GET['user_id'] != "") {
    $user_id = $_GET['user_id'];
} else {
    $user_id = false;
}

$page = $_GET['page'];
$limit_orders = LIMIT_PAGE_ORDERS;

$users = User::getAll();

$data = Order::getAll($status, $user_id, $page, $limit_orders);

$orders = $data['orders'];
$count_orders = $data['count'];

require_once "../views/admin_orders.php";
