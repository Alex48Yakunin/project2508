<?php 
    require_once '../templates/header.php'; 
?>


<!-- breadcrumps -->

<div class="title">
    <?php 
        echo '<h1 class="collection_id" id="collection_'.$collection_id->id.'">'.$collection_id->title.'</h1>'
    ?>
    <p>Все товары</p>
</div>


<div class="catalog-list">
    <div class="catalog-list-item">
        <div class="catalog-select">
            <input id="seach-title" type="text" placeholder="Введите название">
            <hr>
        </div>
        </div>
    <div class="catalog-list-item">
        <div class="catalog-select">
            <p id="category_text">Категория</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list">
            <p class="catalog-select-list-row category_list" id=category_0>Все категории</p>
            <?php 
                    foreach ($categories as $category) {
                        echo '<p class="catalog-select-list-row category_list" id=category_'.$category->id.'>'.$category->title.'</p>';
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
            <p class="catalog-select-list-row category_list" id="category_0">Все размеры</p>
            <?php 
                        foreach ($sizes as $size) {
                            echo '<p class="catalog-select-list-row category_list" id=category_'.$size->id.'>'.$size->value.'</p>';
                        }   
            ?>
        </div>
    </div>
    <div class="catalog-list-item">
        <div class="catalog-select-price">
            <p id="price">Стоимость</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list-price">
            <p class="catalog-select-list-row">MIN<input id="min-price" type="number" step="10" min="<?=$min_price?>" max="<?=$max_price?>" value="<?=$min_price?>"> руб.</p>
            <p class="catalog-select-list-row">MAX<input id="max-price" type="number" step="10" min="<?=$min_price?>" max="<?=$max_price?>" value="<?=$max_price?>"> руб.</p>
            
        </div>
    </div>
</div>

<div class="products">
                <?php
                    if ($products == []) {
                        echo '<h2 class="no-goods"> Извините, товары не найдены...<h2>';
                    }
                ?>
</div>

<div class="pages">
    <div class="pages-item"> 1 </div>
    <div class="pages-item"> 2 </div>
</div>

<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/catalog_list.js"></script>
<script src="../js/product_generation.js"></script>

<?php require_once '../templates/footer.php'; ?>
