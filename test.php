<form action = "test.php" method = "post" enctype = 'multipart/form-data' name="upload">
  <input type = "file" name = "somename" />
  <input type = "submit" value = "Загрузить" />
</form>

<?php

if($_FILES['somename']['type'] == 'image/jpeg' || $_FILES['somename']['type'] == 'image/png') {
    $path = __DIR__.DIRECTORY_SEPARATOR.$_FILES['somename']['name'];
    move_uploaded_file($_FILES['somename']['tmp_name'], $path);
} else {
    die('Выберите JPEG или PNG.');
}

echo '<pre>'; var_dump($_FILES); die;
