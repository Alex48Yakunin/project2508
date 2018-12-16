<?php

require_once '../db.php';

class Product 
{
    public $id;
    public $title;
    public $description;
    public $image;
    public $price;
    public $category_id;
    public $collection;

    public function __construct($id)
    {
        global $mysqli;

        $query = "SELECT product_id, title, description, image, price, category_id, collection FROM products WHERE product_id=$id";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            $product_data = $result->fetch_assoc();

            $this->id = $product_data['product_id'];
            $this->title = $product_data['title'];
            $this->description = $product_data['description'];
            $this->image = $product_data['image'];
            $this->price = $product_data['price'];
            $this->category_id = $product_data['category_id'];
            $this->collection = $product_data['collection'];
        }
    }

    public static function getAll($collection = false, $category_id = false, $order_id = false)
    {
        global $mysqli;

        $conditions = "";
        $tables = "products p";

        if ($collection !== false) {
            $conditions .= " AND p.collection=$collection";
        }
        if ($category_id !== false) {
            $conditions .= " AND p.category_id=$category_id";
        }
        if ($order_id !== false) {
            $tables .= ", order_products op";
            $conditions .= " AND op.order_id=$order_id AND op.product_id=p.product_id";
        }

        $query = "SELECT p.product_id FROM $tables WHERE 1 $conditions";
        $result = $mysqli->query($query);

        $products = [];
        while ($product_data = $result->fetch_assoc()) {
            $products[] = new self($product_data['product_id']);
        }

        return $products;
    }

    public function add($title, $description, $image, $price, $category_id, $collection)
    {
        global $mysqli;

        $query = "INSERT INTO products (title, description, image, price, category_id, collection)
                  VALUES ('$title', '$description', '$image', $price, $category_id, $collection)";
        $result = $mysqli->query($query);

        if($result) {
            return true;
        } else {
            return false;
        }
    }

}

// $product = new Product(90);
// echo '<pre>';
// var_dump($product);
// echo '<hr>';
// $products = Product::getAll(false, false, 1);
// echo '<pre>';
// var_dump($products);
// echo '<hr>';
// $products = Product::getAllByCollection(1);
// echo '<pre>';
// var_dump($products);
// $product = Product::add('Название', 'Описание', '1.jpg', 1000, 1, 1);
// echo '<pre>';
// var_dump($product);
