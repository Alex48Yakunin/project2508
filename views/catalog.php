<?php 
    require_once '../templates/header.php'; 
?>


<!-- breadcrumps -->

<div class="title">
    <h1>
        <?php echo $collection_id->title?>
    </h1>
    <p>Все товары</p>
</div>


<div class="catalog-list">
    <div class="catalog-list-item">
        <div class="catalog-select">
            <p id="category_text">Категория</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list">
            <?php 
                foreach ($categories as $category) {
                    echo '<p class="catalog-select-list-row">'.$category->title.'</p>';
                }
            ?>
        </div>
        
    </div>
    <div class="catalog-list-item">
        <div class="catalog-select">
            <p>Размер</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list">
            <p class="catalog-select-list-row catalog-size">M</p>
        </div>
    </div>
    <div class="catalog-list-item">
        <div class="catalog-select">
            <p>Стоимость</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list">
            <p class="catalog-select-list-row">0 - 2000 руб.</p>
            <p class="catalog-select-list-row">2000 - 3000 руб.</p>
            <p class="catalog-select-list-row">3000 - 6000 руб.</p>
            <p class="catalog-select-list-row">6000 - 12000 руб.</p>
        </div>
    </div>
</div>

<div class="products">
    <?php
    foreach ($products as $product) {
        echo '<a href="../controllers/product.php?product_id='.$product->id.'" class="products-item">
                <div class="products-item-photo" style="background-image: url(../images/picture/'.$product->image.')"></div>
                <p class="products-item-title">'.$product->title.'</p>
                <p class="products-item-price">'.$product->price.'</p>
            </a>';
        
    } 
    ?>
</div>

<div class="pages">
    <div class="pages-item"> 1 </div>
    <div class="pages-item"> 2 </div>
</div>

<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/catalog_list.js"></script>

<?php require_once '../templates/footer.php'; ?>
