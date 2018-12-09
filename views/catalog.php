<?php 
require_once '../templates/header.php'; ?>

<!-- breadcrumps -->

<!-- поменять на переменную - название коллекции -->
<div class="title">
    <h1>МУЖЧИНАМ</h1>
    <p>Все товары</p>
</div>

<!-- <div class="filter">Вставить выпадающий список Сергея</div> -->

<div class="products">
    <?php
    foreach ($products as $product) {
        echo '<div class="products-item">
                <div class="products-item-photo" style="background-image: url(../images/picture/'.$product->image.')"></div>
                <p class="products-item-title">'.$product->title.'</p>
                <p class="products-item-price">'.$product->price.'</p>
            </div>';
        
    } 
    ?>
</div>

<div class="pages">
    <div class="pages-item"> 1 </div>
    <div class="pages-item"> 2 </div>
</div>

<?php require_once '../templates/footer.php'; ?>
