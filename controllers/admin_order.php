<?php


require_once "../models/Order.php";
require_once "../models/User.php";

$order_id = addslashes($_GET['order_id']);

$order = new Order($order_id);

$users = User::getAll();

$orders = array([1]);

require_once "../views/admin_order.php";
 