<?php 
    require_once '../templates/header.php'; 
?>


<!-- breadcrumps -->

<div class="title">
    <?php 
        echo '<h1 class="collection_id" id="collection_'.$collection_id->id.' limit = "'.$limit_products.'">'.$collection_id->title.'</h1>'
    ?>
    <p id = "filter">Все товары</p>
</div>


<div class="catalog-list">
    <div class="catalog-list-item">
        <div class="catalog-select">
            <input id="seach-title" type="text" placeholder="Все названия">
            <hr>
        </div>
        </div>
    <div class="catalog-list-item">
        <div class="catalog-select">
            <p id = "category" cat="all">Все категории</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list">
            <p class="catalog-select-list-row category_list" cat ="all">Все категории</p>
            <?php 
                    foreach ($categories as $category) {
                        echo '<p class="catalog-select-list-row category_list" cat ='.$category->id.'>'.$category->title.'</p>';
                    }   
            ?>
        </div>
        
    </div>
    <!-- <div class="catalog-list-item">
        <div class="catalog-select">
            <p>Размер</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list">
            <p class="catalog-select-list-row category_list" id="category_0">Все размеры</p>
            <?php 
                        // foreach ($sizes as $size) {
                        //     echo '<p class="catalog-select-list-row category_list" id=category_'.$size->id.'>'.$size->value.'</p>';
                        // }   
            ?> 
        </div>
    </div> -->
    <div class="catalog-list-item">
        <div class="catalog-select-price">
            <p id="price">Все цены</p>
            <img src="../images/icon/down-arrow-select.png">
            <hr>
        </div>
        <div class="catalog-select-list-price">
            <p class="catalog-select-list-row">MIN<input id="min-price" type="number" step="10" min="<?=$min_price?>" max="<?=$max_price?>" value="<?=$min_price?>"> руб.</p>
            <p class="catalog-select-list-row">MAX<input id="max-price" type="number" step="10" min="<?=$min_price?>" max="<?=$max_price?>" value="<?=$max_price?>"> руб.</p>
            
        </div>
    </div>
    <div class="catalog-select">
        <button id="seach">Выбрать &#9658 &#9658 &#9658</button>
        <hr>
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

<?php
    $pages = ceil($count_products / $limit_products);
    for ($i = 1; $i <= $pages; $i++) {
        if ($i == $page) {
            echo '<div class="pages-item1">'.$i.'</div>';
        } else {
            echo '<div class="pages-item">'.$i.'</div>';
        }
    }
?>
</div>

<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/product_generation.js"></script>
<script src="../js/catalog_list.js"></script>


<?php require_once '../templates/footer.php'; ?>
