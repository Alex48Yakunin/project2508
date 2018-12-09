<?php


require_once "../models/Order.php"; 

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

$orders = Order::getAll($status, $user_id);

require_once "../views/admin_orders.php"; 

