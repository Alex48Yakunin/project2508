<?php require_once "../templates/header.php";?>


<div class="main-page-zag">
    <h1>Новые поступления весны</h1>
    <p>Мы подготовили для Вас лучшие новинки сезона</p>
    <button>ПОСМОТРЕТЬ НОВИНКИ</button>
</div>
<div class="main-page-catalog">
    <div class="half-flex">
        <div class="col col-2">
            <a href="" class="flex-duo-box box1 col-a">
                <h2>джинсовые<br>куртки</h2>
                <p>New Arrival</p>
                <div class="main-page-custom"></div>
            </a>
            <a href="" class="flex-one-box box2 col-a">
                <div class="main-page-custom"></div>
            </a>
        </div>
        <div class="col col-3">
            <div class="flex-one-box box-grey">
                <div class="br-icon">
                    <hr>
                    <img src="../images/icon/attention-sign-outline.png">
                </div>
                <p class="box-small-text">каждый сезон мы<br> подготавливаем для Вас<br> исключительно лучшую<br> модную одежду. Следит за<br>нашими новинками</p>
            </div>
            <a href="" class="flex-one-box box3 col-a">
                <h2>Джинсы</h2>
                <p class="box-cost">от 3200 руб.</p>
                <div class="main-page-custom"></div>
            </a>
            <div class="flex-one-box box-dark-grey">
                <p class="box-symbol"> &larr;</p>
                <h2>аксессуары</h2>
            </div>
        </div>
    </div>
    <div class="half-flex">
        <div class="col col-3">
            <a href="" class="flex-one-box box4 col-a">
                <div class="main-page-custom"></div>
            </a>
            <div class="flex-one-box box-grey">
                <div class="br-icon">
                    <hr>
                    <img src="../images/icon/attention-sign-outline.png">
                </div>
                <p class="box-small-text">самые низкие цены <br> в Москве. <br>Нашли дешевле? Вернем <br>разницу.</p>
            </div>
            <a href="" class="flex-one-box box5 col-a">
                <div class="cust-background">
                    <h2>спортивная<br>одежда</h2>
                    <p class="box-cost">от 590 руб.</p>
                </div>
                <div class="main-page-custom"></div>
            </a>
        </div>
        <div class="col col-2">
            <div class="flex-one-box box-dark-grey">
                <p class="box-symbol"> &larr;</p>
                <h2>элегантная<br>обувь</h2>
                <p>Ботинки/кроссовки</p>
            </div>
            <a href="" class="flex-duo-box box6 col-a">
                <h2>детская<br>одежда</h2>
                <p>New Arrival</p>
                <div class="main-page-custom"></div>
            </a>
        </div>
    </div>
</div>
<div class="main-page-distribution">
    <h1>будь всегда в курсе выгодных предложений</h1>
    <p>подписывайся и следи за новинками и выгодными предложениями.</p>
    <form class="main-page-form">
        <div>
            <input type="e-mail" placeholder="e-mail">
            <button>записаться</button>
        </div>
        <p id="distribution-error">Некорректный e-mail. Попробуйте еще раз.</p>
    </form>
</div>


<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/main_page.js"></script>
<?php require_once "../templates/footer.php";?>
