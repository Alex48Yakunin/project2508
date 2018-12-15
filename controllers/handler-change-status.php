<?php
require_once "../models/Order.php"; 

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);
$id = $data['order_id'];
$status = $data['status_id'];
$order = new Order($id);
$order->updateStatus($status);
