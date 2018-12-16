<?php require_once "../templates/header.php";

?>

<h2 class="card-heard">
    <div class="card-logo"></div>
    <div>Корзина</div>
</h2>
<div class="card-table-heard">
    <div class="card-table-cell1">Список товаров</div>
    <div class="card-table-cell2">Цена, руб.</div>
    <div class="card-table-cell3">Кол-во</div>
    <div class="card-table-cell4">Сумма, руб.</div>
</div>

<?php
foreach ($cart_view as $key => $cart) {
echo (
'<div class="card-table-row">
<div class="card-table-cell1">
    <div class="product-image" style= "background: url(../images/catalog/'.$cart['image'].') center center / contain no-repeat" ></div>
    <div class="product-block">
        <div class="product-name">'.$cart['title'].' '.$cart['collection'].'</div>
        <div class="product-describe">Размер '.$cart['size'].'</div>
    </div>
</div>
<div class="card-table-cell2">'.$cart['price'].'</div>
<div class="card-table-cell3">
<input type="number" step="1" min="1" max="10" value="'.$cart['count'].'" id="count" name="count"/>
</div>
<div class="card-table-cell4">200</div>
</div>'
);
}
?>

<div class="card-table-result">
    <div class="card-table-cell1"><button id="order"><p>Оформить заказ</p></button></div>
    <div class="card-table-cell2">Итого:</div>
    <div class="card-table-cell3">3</div>
    <div class="card-table-cell4">600</div>
</div>
<form id="form-order">
    <div class="head-form">
        <div class="header-nav-logo-small"></div>
        <div>Оформление заказа</div>
        <button class = 'hide-order'>&#9650</button> 
    </div><br><br>
    Имя: <input id="name" type="text" name="name"><br><br>
    Email: <input id="email" type="text" name="email"><br><br>
    Адрес доставки: <input id="address" type="text" name="address"><br><br>
    Комментарии: <input id="comment" type="text" name="comment"><br><br>
    <button class = 'butt-result-order' type="submit">Перейти к оплате</button>
    <br>
</form>

<form id="form-pay">
    <div class="head-form">
        <div class="header-nav-logo-small"></div>
        <div>Оплата заказа</div>
        <button class = 'hide-pay'>&#9650</button> 
    </div><br><br>
    Поле для подключения сервиса безналичной оплаты
    <div class="pay"></div>
    <br><br>
    <button class = 'butt-result-pay' type="submit">Оплатить заказ</button>
    <br>
</form>

<div class="dark"></div>

<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/cart.js"></script>

<?php require_once "../templates/footer.php";?>
