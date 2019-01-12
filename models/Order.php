<?php

require_once '../db.php';

class Order 
{
    public $id;
    public $status;
    public $address;
    public $comment;
    public $user_id;

    public static $statuses = [
        'Ожидает подтверждения',
        'Подтвержден',
        'Оплачен',
        'В пути',
        'Доставлен',
        'Исполнен'
    ];

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

    public static function getAll($status = false, $user_id = false, $page = false, $count_items = false)
    {
        global $mysqli;

        if ($page !== false) {
            --$page;
        }

        $condition = "";
        if ($status !== false){
            $condition.= " AND status=$status"; 
        }
        if ($user_id !== false){
            $condition.= " AND user_id=$user_id";
        }

        $query = "SELECT COUNT(*) as count FROM orders";
        $result = $mysqli->query($query);
        $count_data = $result->fetch_assoc();
        if ($count_data['count'] < $page * $count_items) {
            return false;
        }

        if ($page !== false) {
            $limit = " LIMIT " . ($page * $count_items) . ", " . $count_items;
        } else {
            $limit = "";
        }
        

        $query = "SELECT order_id FROM orders WHERE 1 $condition $limit";
        $result = $mysqli->query($query);

        $orders = [];
        while ($order_data = $result->fetch_assoc()) {
            $orders[] = new self($order_data['order_id']);
        }

        return [
            'orders' => $orders, 
            'count' => $count_data['count']
        ];
    }

    public function getStatusName()
    {
        if(isset($this->status)) {
            $statusName = self::$statuses[$this->status];
        } else {
            return false;
        }

        return $statusName;
    }

    public function updateStatus($status)
    {
        if((is_numeric($status) !== false) && ($status>=0) && ($status<=5)) {
            $this->status = $status;
            $id = $this->id;
            global $mysqli;
            $query = "UPDATE orders SET status=$status WHERE order_id=$id";
            $result = $mysqli->query($query);
            if($result) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
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

// $order = new Order(1);
// echo '<pre>';
// var_dump($order->getStatusName());
