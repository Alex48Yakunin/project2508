<?php 
    $admin_page_title = 'Заказ№'.$order->id;
?>
<?php require_once "../templates/admin_header.php" 
?> 
       
        <?php 
                      
            echo(
            '<div class="container alert alert-success mb-4" id="orders">
            <div class="orders-item">
                <h2 class="text-betwen">
                    <div>Заказ №'.$order->id.'</div>
                    <div><span id="order-date">2018-10-01</span>/<span id="order-time">17:03</span></div>
                </h2>
                <h3 class="text-center mb-3" id="order-user_name">Сергей Дмитренко</h3>
                <div class="row row1">
                    <div class="col-4">
                        <p>Статус заказа: <span id="order-status">'.(($order->status == 0) ? 'Ожидается подтверждение' : 'Заказ подтвержден').'</span></p>
                    </div>
                <div class="col-8">
                    <input class="btn btn-success" type="button" value="Сменить статус заказа">
                </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Адрес заказа: <span id="order-status">'.$order->address.'</span></p>
                    </div>
                <div class="col-8">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Ввести новый адрес</span>
                        </div>
                            <input type="text" class="form-control" placeholder="Новый адрес" aria-label="Новый адрес" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                    <p>Комментарии: <span id="order-status">'.(($order->comment == "") ? 'Нет комментариев' : $order->comment).'</span></p>
                </div>
                <div class="col-8">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Заменить комментарий</span>
                        </div>
                            <input type="text" class="form-control" placeholder="Новый комментарий" aria-label="Новый комментарий" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
                <div id="order-basket">
                   <!-- 1 товар -->
                    <div id="order-basket-item" class="d-flex mb-2">
                        <img src="https://avatars.mds.yandex.net/get-marketpic/247272/market_kTg0zTRNgRz1ZWI_uyY05A/orig" id="product-img">
                        <div id="product-description" class="d-flex row text-center container-fluid">
                            <p id="product-name" class="col-sm-8 text-left mb-0">Мужские зимние ботинки</p>
                            <p id="product-size" class="col-sm-1 mb-0">39</p>
                            <p id="product-cost" class="col-sm-3 mb-0">2000 руб.</p>
                        </div>
                    </div>
                    <!-- 2 товар -->
                    <div id="order-basket-item" class="d-flex">
                        <img src="https://yandex.ru/images/ELgA649W1/849af3HWDQzQ/1aTORUWcftvr7LNnbkrIFjFs9NDLI0I2W_mBwl6e2Caflns2uyWQNSOfa-vrvDUnxZCJsjl6mfa056hD4g644WFVSsWVWWrYC1-nx8r7DdcxA" id="product-img">
                        <div id="product-description" class="d-flex row text-center container-fluid">
                            <p id="product-name" class="col-sm-8 text-left mb-0">Синяя куртка N103</p>
                            <p id="product-size" class="col-sm-1 mb-0">S</p>
                            <p id="product-cost" class="col-sm-3 mb-0">5990 руб.</p>
                        </div>
                    </div>
                </div>
                <div id="order-status-select" class="d-flex justify-content-center align-items-center mt-3">
                <a class="btn btn-success" href="../controllers/admin_orders.php" role="button">Вернуться к списку заказов</a> 
                </div>
            </div>
        </div>'
        );
           
        ?>
          
<?php require_once "../templates/admin_footer.php" ?>
 