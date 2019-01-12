<?php

require_once '../models/Product.php';

//собрать строку из случайных символов - стырено, но понятно
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

$product_id = $_REQUEST['product_id'];
$title = $_REQUEST['title'];
$description = $_REQUEST['description'];
$price = $_REQUEST['price'];
$collection = $_REQUEST['collection'];
$category_id = $_REQUEST['category'];
$image = '../uploaded/'.$_FILES['upload_pic']['name']; //кривовато, но костылит отсутствие единой точки входа и единой системы папок с картинками

$product = new Product($product_id);
$product->update($title, $description, $image, $price, $category_id, $collection);

header('Location: admin_products_list.php');
