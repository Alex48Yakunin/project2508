<?php

require_once '../db.php';

class Order 
{
    public $id;
    public $status;
    public $address;
    public $comment;
    public $user_id;


    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT order_id, status, address, comment, user_id FROM orders WHERE order_id=$id";
        $result = $mysqli->query($query);

        $order_data = $result->fetch_assoc();

        
        $this->id = $order_data['order_id'];
        $this->status = $order_data['status'];
        $this->address = $order_data['address'];
        $this->comment = $order_data['comment'];
        $this->user_id = $order_data['user_id'];

    }

    public static function getAll($status = false, $user_id = false)
    {
        $condition = "";
        if ($status !== false){
            $condition.= " AND status=$status"; 
        }
        if ($user_id !== false){
            $condition.= " AND user_id=$user_id";
        }
       
        global $mysqli;

        $query = "SELECT order_id FROM orders WHERE 1 $condition";
        $result = $mysqli->query($query);

        $orders = [];
        while ($order_data = $result->fetch_assoc()) {
            $orders[] = new self($order_data['order_id']);
        }

        return $orders;
    }

    public static function getStatusName($status)
    {
        $statusName = '';
        switch ($status) {
            case 0: $statusName = 'Ожидает подтверждения'; break;
            case 1: $statusName = 'Подтвержден'; break;
            case 2: $$statusName = 'Оплачен'; break;
            case 3: $statusName = 'В пути'; break;
            case 4: $statusName = 'Доставлен'; break;
            case 5: $statusName = 'Исполнен'; break;
        }
        return $statusName;
    }

}

// $order = new Order(1);
// var_dump($order);
// echo '<hr>';

// $orders = Order::getAll(false,0);
// var_dump($orders);

// $order = new Order(1);
// $order->updateStatus(3);
// echo '<pre>';
// var_dump($order);

// $orders = Order::getStatusName(3);
// echo '<pre>';
// var_dump($orders);

