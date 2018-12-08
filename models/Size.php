<?php
 
require_once '../db.php';
 
class Size
{
    public $id;
    public $value;
 
    public function __construct($id)
    {
        global $mysqli;
 
        $query = "SELECT size_id, value FROM sizes WHERE size_id=$id";
        $result = $mysqli->query($query);
 
        if ($result->num_rows > 0) {
            $size_data = $result->fetch_assoc();
 
            $this->id = $size_data['size_id'];
            $this->value = $size_data['value'];
        }
    }
 
    public static function getAll()
    {
        global $mysqli;
 
        $query = "SELECT size_id FROM sizes";
        $result = $mysqli->query($query);
 
        $sizes = [];
        while ($size_data = $result->fetch_assoc()) {
            $sizes[] = new self($size_data['size_id']);
        }
 
        return $sizes;
    }
	
}
