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
                            echo '<a href="" class="product__views-link" data-size-id = "' . $size->id . '">' . $size->value . '</a>';
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
<div class="basket_alert">
    <div class="basket_alert_header">
        <h1>Товар успешно добавлен в корзину!</h1>
        <button id="close_cross"></button>
    </div>
    <hr>
    <div class="basket_alert_product">
        <img src="../images/picture/<?php echo $product->image;?>">
        <div class="basket_alert_product_desc">
            <div class="basket_alert_product_desc_item">
                <p id="basket_alert_prod_name">
                    <?php echo $product->title;?>
                </p>
                <p>Размер: <span>39</span></p>
                <p>Количество: <span>1</span></p>
            </div>
            <div class="basket_alert_product_desc_cost">
                <p class="basket_alert_product_desc_cost_zag">Стоимость: </p>
                <p>
                    <?php echo $product->price;?> руб.
                </p>
            </div>

        </div>
    </div>
    <div class="basket_alert_btns">
        <button class="basket_alert_btns_close">Продолжить покупки</button>
        <button id="button_to_basket">
            Перейти в корзину
            <img src="../images/icon/shopping-cart.png">
        </button>
    </div>
    <div class="basket_alert_additional">
        <h1>
            <span>Возможно вас заинтересует</span>
        </h1>
    </div>
    <div class="basket_alert_slider_area">
        <div class="basket_alert_additional-slider">
            <div class="basket_alert_additional-slider_box">

                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Синяя куртка</p>
                    <p id="basket_alert_additional_cost">3500 руб.</p>
                </a>

                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Мяч</p>
                    <p id="basket_alert_additional_cost">500 руб.</p>
                </a>

                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Штанга</p>
                    <p id="basket_alert_additional_cost">1200 руб.</p>
                </a>

                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Гамак</p>
                    <p id="basket_alert_additional_cost">1900 руб.</p>
                </a>
                
                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Палатка</p>
                    <p id="basket_alert_additional_cost">2500 руб.</p>
                </a>
                
                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Палатка</p>
                    <p id="basket_alert_additional_cost">2500 руб.</p>
                </a>

                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Палатка</p>
                    <p id="basket_alert_additional_cost">2500 руб.</p>
                </a>

                <a href="" class="basket_alert_additional-item">
                    <img src="../images/catalog/1.jpg">
                    <p>Палатка</p>
                    <p id="basket_alert_additional_cost">2500 руб.</p>
                </a>

            </div>
        </div>
        <button id="basket_alert_additional_btn_next"></button>
        <button id="basket_alert_additional_btn_prev"></button>
    </div>

</div>

<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/add_to_cart.js"></script>

<?php require_once "../templates/footer.php";?>
