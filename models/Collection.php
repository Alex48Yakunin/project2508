<?php

class Collection
{
    public $id;
    public $title;

    public static $data = [
        [
            'title' => 'Все товары',
            'id' => 0
        ],
        [
            'title' => 'для женщин',
            'id' => 1
        ],
        [
            'title' => 'для мужчин',
            'id' => 2
        ],
        [
            'title' => 'для детей',
            'id' => 3
        ],
    ];
    

    public function __construct($id)
    {
        if (isset(self::$data[$id])) {
            $data = self::$data[$id];
        } else {
            $data = self::$data[0];
        }
        $this->id = $data['id'];
        $this->title = $data['title'];
    }

    public static function getAll()
    {
        $data = self::$data;
        $Collection = [];
        foreach ($data as $key) {
            $Collection [] = new self($key['id']);
        }


        return $Collection;
    }
} 



// $Collection = new Collection(1);
// var_dump($Collection);
// echo '<hr>';
// $Collection = Collection::getAll();
// var_dump($Collection);
