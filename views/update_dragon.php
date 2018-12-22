<?php require_once '../templates/admin_header.php'; ?>

<div id="delete-banner">
    <div class="update-banner-inner col-4 rounded">
        <form id="product-create">
            <div class="form-group">
            <label for="exampleFormControlInput1">Изменить название</label>
            <input class="form-control" type="text" id="title" placeholder="<?php echo $product->title ?>">
            <label for="exampleFormControlTextarea1">Изменить описание</label>
            <textarea class="form-control" id="description" placeholder="<?php echo $product->description ?>" rows="3"></textarea>
            <label for="exampleFormControlInput1">Изменить цену</label>
            <input class="form-control" type="number" id="price" placeholder="<?php echo $product->price ?>">
            <label for="exampleFormControlSelect1">Коллекция</label>
            <select class="form-control" name="collection" id="collection">
                <?php 
                foreach ($collections as $collection) {
                    echo '<option value="'.$collection->id.'">'.$collection->title.'</option>';
                };
                ?>
            </select>
            <label for="exampleFormControlSelect1">Категория</label>
            <select class="form-control" name="category" id="category">
                <?php 
                foreach ($categories as $category) {
                echo '<option value="'.$category->id.'">'.$category->title.'</option>';
                };
                ?>
            </select>
            </div>
            <div class="buttons">
                <a href="../controllers/handler_update.php?product_id=<?php echo $product_id; ?>" class="btn btn-dark" id="product-update">Изменить</a>
                <a href="../controllers/admin_products_list.php" class="btn btn-dark" id="product-back">Вернуться</a>
            </div>
        </form>
    </div>
</div>

<?php require_once '../templates/admin_footer.php'; ?>
