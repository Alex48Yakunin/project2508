<?php

echo '<pre>'; var_dump($_FILES); die;

if($_FILES['upload']['type'] == 'image/jpeg' || $_FILES['upload']['type'] == 'image/png') {
    $path = __DIR__'../images/uploaded/'.$_FILES['upload']['name'];
    move_uploaded_file($_FILES['upload']['tmp_name'], $path);
} else {
    die('Выберите JPEG или PNG.');
}

echo '<pre>'; var_dump($_FILES); die;
