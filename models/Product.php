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

    public static function getAll($collection = false, $category_id = false)
    {
        global $mysqli;

        $conditions = "";

        if ($collection !== false) {
            $conditions .= " AND collection=$collection";
        }

        $query = "SELECT product_id FROM products WHERE 1 $conditions";
        $result = $mysqli->query($query);

        $products = [];
        while ($product_data = $result->fetch_assoc()) {
            $products[] = new self($product_data['product_id']);
        }

        return $products;
    }
}

// $product = new Product(90);
// echo '<pre>';
// var_dump($product);
// echo '<hr>';
// $products = Product::getAll(2);
// echo '<pre>';
// var_dump($products);
// echo '<hr>';
// $products = Product::getAllByCollection(1);
// echo '<pre>';
// var_dump($products);
