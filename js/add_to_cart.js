$(document).ready(function () {

    var product_id = getUrlVars()["product_id"];
    var size_id = $('.product__views-link:first-of-type').data('size-id');
    $('.product__views-link:first-of-type').addClass('product__link-size');

    function getUrlVars() {
        //извлекаем get параметр product_id
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }


    $('.product__views-link').click(function (e) {
        e.preventDefault();
        $('.product__views-link').siblings().removeClass('product__link-size');
        $(this).addClass('product__link-size');
        size_id = $(this).data('size-id'); // получаем size_id
    })

    console.log(size_id);

    $('.product__desc-button_link').click(function (event) {
        event.preventDefault();
        $.post('add_to_cart.php', {
            product_id: product_id,
            size_id: size_id
        }, function (data) {
            if (data) {
                $('.basket_alert').css('display', 'block');
                ShowModalWindow();
            } else {
                alert('Что-то пошло не так...попробуйте ещё раз');
            }
        });
    }) // end click
})


//// Модальное окно ////

function showModalWindow() {

    ///////////////  Кнопки  ////////////////

    // Кнопка закытия окна (крестик)
    $('#close_cross').click(function () {
        $('.basket_alert').css('display', 'none');
    });
    //Кнопка продолжить покупки
    $('.basket_alert_btns_close').click(function () {
        $('.basket_alert').css('display', 'none');
    });
    //Кнопка добавить в корзину
    $('#button_to_basket').click(function () {
        location.href = "../controllers/cart.php";
    });

    /// Размер слайдера ///
    
    ///Кол-во товара в предложке
    var products_count = $('.basket_alert_additional-item').length;
    //Размер 1 товара с учетом отступов css
    var width = $('.basket_alert_additional-item').css('width');
    width = parseInt(width);
    width = width + 16;
    //Размер слайдера
    var slider_width = products_count * width;
    $('.basket_alert_additional-slider_box').css('width', slider_width);

    //Если товара меньше 4, слайдер не должен работать
    if (products_count <= 4){
        $('#basket_alert_additional_btn_next').css('display', 'none');
    }
    
    //////////// Слайдер вправо ////////////

    $('#basket_alert_additional_btn_next').click(function () {

        // Получение отступ элементов слайдера
        var margin = $(this).prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').css('margin-left');

        // Точка, когда скрывается кнопка с учетом того, что видно 4 продукта
        var hide_next_btn = -width * (products_count - 5) + 'px';

        // Показывать кнопку назад, когда 1 и больше элементов слева
        if (margin !== 0) {
            $('#basket_alert_additional_btn_prev').css('display', 'block');
        }

        //Скрывать кнопку вправо, когда там не осталось элементов
        if (margin == hide_next_btn) {
            $('#basket_alert_additional_btn_next').css('display', 'none');
        }

        //Отступ
        margin = parseInt(margin);
        margin = margin - width;

        //Скрывать кнопки, пока идет анимация
        LockButton(this, '#basket_alert_additional_btn_prev');

        //Анимация отступа
        $(this).prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({
            marginLeft: margin
        }, 200);

    });

    /// Слайдер влево ///

    $('#basket_alert_additional_btn_prev').click(function () {

        // ПОлучение отступ элементов слайдера
        var margin = $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').css('margin-left');

        //Отступ
        margin = parseInt(margin);
        margin = margin + width;
        
        // Пока слева есть минимум 1 товар
        var hide_next_btn = -width * (products_count - 4) + 'px';
        
        //Если слева нет товаров, то скрывается кнопка влево
        if (margin == 0) {
            $('#basket_alert_additional_btn_prev').css('display', 'none');
        }
        //
        if (margin < products_count) {
            $('#basket_alert_additional_btn_next').css('display', 'block');
        }
        
        //Скрывать кнопки, пока идет анимация
        LockButton(this, '#basket_alert_additional_btn_prev');

        //Анимация отступа
        $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({
            marginLeft: margin
        }, 200);

    });
}

//Функция скрывания кнопки, пока идет анимация
function lockButton(object_1, object_2) {
    var lockInterval = setInterval(function () {
        $(object_1).css('pointer-events', 'none');
    });

    setTimeout(function () {
        $(object_1).css('pointer-events', 'painted');
        clearInterval(LockInterval);
    }, 200);
}

//////////////////  Конец модального окна  ////////////////
