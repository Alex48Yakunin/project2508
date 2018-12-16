<?php require_once '../templates/admin_header.php'; ?>

<h2 class="text-center">Создать товар</h1>
<form action="" method="POST" id="product-create">
    <span>Название</span>
    <input type="text" id="title" placeholder="Введите название товара" style="margin-top:10px"><br>
    <span>Описание</span>
    <input type="text" id="description" placeholder="Введите описание товара" style="margin-top:10px"><br>
    <span>Цена</span>
    <input type="number" id="price" placeholder="Введите цену товара" style="margin-top:10px"><br>
    <span>Коллекция</span>
    <select name="collection" id="collection" style="margin-top:10px">
        <?php 
            foreach ($collections as $collection) {
                echo '<option value="'.$collection->id.'">'.$collection->title.'</option>';
            };
        ?>
    </select><br>
    <!-- <span>Категория</span>
    <select name="category" id="category" style="margin-top:10px">
        <?php 
            foreach ($categorys as $category) {
                echo '<option value="'.$category->id.'">'.$category->title.'</option>';
            };
        ?>
    </select> -->
    <!-- <span>Фото</span>
    <input type="file" id="photo" style="margin-top:10px"><br> -->
    <input type="submit" style="margin-top:10px">
</form>

<script src="../js/product_create.js"></script>

<?php require_once '../templates/admin_footer.php'; ?>
