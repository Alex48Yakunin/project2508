<?php

class Collection
{
    public $id;
    public $title;

    public static $data = [
        [
            'title' => 'женщинам',
            'id' => 1
        ],
        [
            'title' => 'мужчинам',
            'id' => 2
        ],
        [
            'title' => 'детям',
            'id' => 3
        ],
    ];
    

    public function __construct($id)
    {
        $data = self::$data[$id-1];
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



$Collection = new Collection(1);
var_dump($Collection);
echo '<hr>';
$Collection = Collection::getAll();
var_dump($Collection);
