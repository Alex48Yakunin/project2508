<?php require_once "../templates/header.php";?>

<section>
    <div class="product">
        <div class="product__img">
            <img src="../images/picture/<?php echo $product->image;?>" alt="" class="product__img-pic">
        </div>
    </div>
</section>
<section>
    <div class="product">
        <div class="product__desc">
            <h2 class="product__desc-title">
                <?php echo $product->title;?>
            </h2>
            <div class="product__desc-cost">
                <?php echo $product->price;?>
            </div>
            <p class="product__desc-text">
                <?php echo $product->description;?>
            </p>
            <div class="product__desc-size">
                <div class="product__size-title">Размер</div>
                <div class="product__size-views">
                    <?php 
                    foreach($sizes as $size) {
                            echo '<a href="" class="product__views-link">' . $size->value . '</a>';
                        }                       
                        ?>
                </div>
            </div>
            <div class="product__desc-button">
                <a href="" class="product__desc-button_link">Добавить в корзину</a>
            </div>
        </div>
    </div>
</section>


<?php require_once "../templates/footer.php";?>