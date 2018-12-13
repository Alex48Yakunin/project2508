<?php require_once "../templates/header.php";?>
       
       
        <div class="basket-zag">
            <h1>Ваша корзина</h1>
            <p>Товары резервируются на ограниченное время</p>
        </div>

        <div class="basket">
            <div class="basket-header">
                <div class="basket-header-item basket-header-left">
                    <p>Фото</p>
                    <p>Наименование</p>
                </div>
                <div class="basket-header-item basket-header-right">
                    <p>Размер</p>
                    <p>Количество</p>
                    <p>Стоимость</p>
                    <p>Удалить</p>
                </div>
            </div>

            <hr class="basket-hr">
            <!--                                    ТОВАР 1-->
            <div class="basket-product">
                <div class="basket-product-item-left">
                    <div class="basket-product-img-div">
                        <img src="../images/catalog/1.jpg">
                    </div>
                    <div class="basket-product-description">
                        <p class="basket-product-name">Куртка синяя</p>
                        <p class="basket-product-article">арт. 12552</p>
                    </div>
                </div>
                <div class="basket-product-item-right">
                    <p class="basket-cutom-text">39</p>
                    <div class="basket-product-count">
                        <p class="basket-cutom-text">1</p>
                        <div class="basket-product-btns">
                            <button>+</button>
                            <button>-</button>
                        </div>
                    </div>
                    <p class="basket-cutom-text">3800 руб.</p>
                    <button class="basket-btn-delete">&#10006;</button>
                </div>
            </div>
            <hr class="basket-hr">
            <!--                                    ТОВАР 2-->
            <div class="basket-product">
                <div class="basket-product-item-left">
                    <div class="basket-product-img-div">
                        <img src="../images/catalog/7.jpg">
                    </div>
                    <div class="basket-product-description">
                        <p class="basket-product-name">Кеды серые</p>
                        <p class="basket-product-article">арт. 34234</p>
                    </div>
                </div>
                <div class="basket-product-item-right">
                    <p class="basket-cutom-text">M</p>
                    <div class="basket-product-count">
                        <p class="basket-cutom-text">1</p>
                        <div class="basket-product-btns">
                            <button>+</button>
                            <button>-</button>
                        </div>
                    </div>
                    <p class="basket-cutom-text">5200 руб.</p>
                    <button class="basket-btn-delete">&#10006;</button>
                </div>
            </div>
            <hr class="basket-hr">

            <!--                                    ТОВАР 3-->
            <div class="basket-product">
                <div class="basket-product-item-left">
                    <div class="basket-product-img-div">
                        <img src="../images/catalog/12.jpg">
                    </div>
                    <div class="basket-product-description">
                        <p class="basket-product-name">Джинсы голубые</p>
                        <p class="basket-product-article">арт. 23523</p>
                    </div>
                </div>
                <div class="basket-product-item-right">
                    <p class="basket-cutom-text">S</p>
                    <div class="basket-product-count">
                        <p class="basket-cutom-text">1</p>
                        <div class="basket-product-btns">
                            <button>+</button>
                            <button>-</button>
                        </div>
                    </div>
                    <p class="basket-cutom-text">3500 руб.</p>
                    <button class="basket-btn-delete">&#10006;</button>
                </div>
            </div>
        </div>
        <hr class="basket-hr">
        <div class="basket-itog">
            <div>
                <p class="basket-cutom-text">Итого:</p>
                <p class="basket-cutom-text" id="basket-itogsumm">13500 руб.</p>
            </div>
        </div>

        <div class="basket-wave">
            <img src="../images/icon/down-arrow.png">
            <img src="../images/icon/down-arrow.png" id="basket-2-wave">
            <img src="../images/icon/down-arrow.png" id="basket-3-wave">
        </div>

        <hr class="basket-hr">

        <div>
            <div class="basket-zag basket-form-zag">
                <h1>Адрес доставки</h1>
                <p>Все поля обязательны для заполнения</p>
            </div>
        </div>

        <form class="basket-form">
            <div class="basket-form-deliv">
                <p class="form-text">Выберите вариант доставки</p>

                <div id="select-menu" class="basket-form-input">
                    <div class="select-menu-header select-menu-header">
                        <p id="select-menu-header-text">Курьерская служба - 500руб.</p>
                        <img src="../images/icon/down-arrow-select.png" id="select-menu-img">
                    </div>
                    <div id="select-menu-list">
                        <div class="select-menu-row">
                            <p>Курьерская служба - 500руб.</p>
                        </div>
                        <div class="select-menu-row">
                            <p>Почта - 250руб.</p>
                        </div>
                        <div class="select-menu-row">
                            <p>Самовывоз - бесплатно</p>
                        </div>
                    </div>
                </div>



            </div>
            <div class="basket-form-fio basket-two-in-row">
                <div class="basket-two-in-row-item">
                    <p class="form-text">Имя</p>
                    <input type="text" class="basket-form-input">
                </div>
                <div class="basket-two-in-row-item">
                    <p class="form-text">Фамилия</p>
                    <input type="text" class="basket-form-input">
                </div>
            </div>

            <div class="basket-form-adress">
                <p class="form-text">Адресс</p>
                <input type="text" class="basket-form-input">
            </div>

            <div class="basket-two-in-row">
                <div class="basket-two-in-row-item">
                    <p class="form-text">Город</p>
                    <input type="text" class="basket-form-input">
                </div>
                <div class="basket-two-in-row-item">
                    <p class="form-text">Индекс</p>
                    <input type="text" class="basket-form-input">
                </div>
            </div>

            <div class="basket-two-in-row">
                <div class="basket-two-in-row-item">
                    <p class="form-text">Телефон</p>
                    <input type="text" class="basket-form-input">
                </div>
                <div class="basket-two-in-row-item">
                    <p class="form-text">E-mail</p>
                    <input type="text" class="basket-form-input">
                </div>
            </div>
        </form>

        <hr class="basket-hr">
        <div class="basket-wave">
            <img src="../images/icon/down-arrow.png">
            <img src="../images/icon/down-arrow.png" id="basket-2-wave">
            <img src="../images/icon/down-arrow.png" id="basket-3-wave">
        </div>
        <hr class="basket-hr">

        <div class="basket-zag basket-oplata-zag">
            <h1>Варианты Оплаты</h1>
            <p>Все поля обязательны для заполнения</p>
        </div>
        <div class="basket-itog-summ">
            <div class="basket-itog-summ-item">
                <p class="basket-itog-summ-item-left">Стоимость:</p>
                <p class="basket-itog-summ-item-right">12500 руб.</p>
            </div>
            <div class="basket-itog-summ-item">
                <p class="basket-itog-summ-item-left">Доставка:</p>
                <p class="basket-itog-summ-item-right">500 руб.</p>
            </div>
            <div class="basket-itog-summ-item">
                <p class="basket-itog-summ-item-left basket-itog-color">Итого:</p>
                <p class="basket-itog-summ-item-right basket-itog-color">13000 руб.</p>
            </div>
        </div>

        <div class="basket-oplata">
            <p class="form-text">Выберите способ оплаты</p>

            <div id="select-menu" class="basket-form-input">
                <div class="select-menu-header">
                    <p id="select-menu-header-text">Банковская карта</p>
                    <img src="../images/icon/visa.png" id="basket-visa" class="basket-select-card">
                    <img src="../images/icon/mastercard.png" id="basket-mastercard" class="basket-select-card">
                    <img src="../images/icon/down-arrow-select.png" id="select-menu-img">
                </div>
                <div id="select-menu-list">
                    <div class="select-menu-row">
                        <p class="select-menu-header-text">Банковская карта</p>
                        <img src="../images/icon/mastercard.png" id="basket-mastercard" class="basket-select-card">
                        <img src="../images/icon/visa.png" id="basket-visa" class="basket-select-card">
                    </div>
                    <div class="select-menu-row">
                        <p class="select-menu-header-text">Наличные</p>
                        <img src="../images/icon/cash.png" id="basket-cash" class="basket-select-card">
                    </div>
                </div>
            </div>


            <div class="basket-oplata-btn">
                <button>Заказать</button>
            </div>

        </div>


<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/basket_list.js"></script>
<?php require_once "../templates/footer.php";?>
