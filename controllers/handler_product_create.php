<?php
require_once '../models/Product.php';

function randomString($length) { 
    $keys = array_merge(range(0,9), range('a', 'z'));

    $key = "";
    for($i=0; $i < $length; $i++) {
        $key .= $keys[mt_rand(0, count($keys) - 1)];
    }
    return $key;
}

if($_FILES['upload_pic']['type'] == 'image/jpeg' || $_FILES['upload_pic']['type'] == 'image/png') {

    //получить расширение файла
    $extension = explode('.', $_FILES['upload_pic']['name']); //пользовательское название файла раздербанить в массив по точке
    $_FILES['upload_pic']['name'] = randomString(10).'.'.end($extension); //переименовать файл в рандомнаястрока.расширение
    
    //собственно, сохранить файл на сервер
    $path = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'uploaded'.DIRECTORY_SEPARATOR.$_FILES['upload_pic']['name'];
    move_uploaded_file($_FILES['upload_pic']['tmp_name'], $path);
} else {
    die('Выберите JPEG или PNG.');
}

$postData = file_get_contents('php://input');
$data = json_decode($postData, true);
$title = $data['title'];
$description = $data['description'];
$price = $data['price'];
$collection = $data['collection'];
$category_id = $data['category_id'];

$image = '../uploaded/'.$_FILES['upload_pic']['name'];

$product = Product::add($title, $description, $image, $price, $category_id, $collection);
