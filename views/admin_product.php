<?php require_once '../templates/admin_header.php'; ?>

<h1 class="text-center"><?php echo $product->title; ?></h1>
<div class="product">
    <div class="row justify-content-center align-items-center admin-product-img">
        <img src="../images/picture/<?php echo $product->image;?>" alt="" class="col-4">
    </div>
    <div class="row justify-content-center align-items-center">
        <p class="col-md-auto">
            Цена: <?php echo $product->price;?><br>
            Описание: <?php echo $product->description;?><br>
            Размеры: <?php 
                foreach($sizes as $size) {echo '<span style="margin: 0 10px">'.$size->value.'</span>';}                       
            ?>
        </p>
    </div>
    <div class="row justify-content-center align-items-center">
        <a href="../controllers/admin_product_update.php" type="button" class="btn btn-success" id="btn-update">Изменить</a>
        <a href="../controllers/admin_product_delete.php" type="button" class="btn btn-danger" style="margin-left: 10px" id="btn-delete">Удалить</a>
    </div>
</div>


<?php require_once '../templates/admin_footer.php'; ?>
