<?php

require_once '../db.php';


class Category 
{ 
    public $id;
    public $title;
    public $description;

    public function __construct($id)

    {
        global $mysqli;

        $query = "SELECT category_id, title, description FROM categories WHERE category_id=$id";
        $result = $mysqli->query($query);

        $category_data = $result->fetch_assoc();

        $this->id = $category_data['category_id'];
        $this->title = $category_data['title'];
        $this->description = $category_data['description'];
    }

    public static function getAll()
    {
        global $mysqli;

        $query = "SELECT category_id FROM categories";
        $result = $mysqli->query($query);

        $categories = [];
        while ($category_data = $result->fetch_assoc()) {
            $categories[] = new self($category_data['category_id']);
        }

        return $categories;
    }

}


// $category = new Category(1);
// var_dump($category);
// echo '<hr>';
// $categories = Category::getAll();
// var_dump($categories);
