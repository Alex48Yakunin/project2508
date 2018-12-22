$(document).ready(function () {

    var open_modal_window = 0;
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
                Show_modal_window();
            } else {
                alert('Что-то пошло не так...попробуйте ещё раз');
            }
        });
    }) // end click
})


//// Модальное окно ////

function Show_modal_window() {

        //////  Кнопки  ///////

        $('#close_cross').click(function () {
            $('.basket_alert').css('display', 'none');
        });
        $('.basket_alert_btns_close').click(function () {
            $('.basket_alert').css('display', 'none');
        });
        $('#button_to_basket').click(function () {
            location.href = "../controllers/cart.php";
        });

        /// Размер слайдера ///

        var products_count = $('.basket_alert_additional-item').length;
        var products_width = $('.basket_alert_additional-item').css('width');
        products_width = parseInt(products_width);
        var slider_width = (products_count * products_width) + (16 * products_count);
        $('.basket_alert_additional-slider_box').css('width', slider_width);

        ///     Слайдер     ///

        var width = $('.basket_alert_additional-item').css('width');
        width = parseInt(width);
        width = width + 16;
        i = 1;

        /// Слайдер вправо ///

        $('#basket_alert_additional_btn_next').click(function () {

            var margin = $(this).prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').css('margin-left');

            var hide_next_btn = -width * (products_count - 5) + 'px';

            if (margin !== 0) {
                $('#basket_alert_additional_btn_prev').css('display', 'block');
            }

            if (margin == hide_next_btn) {
                $('#basket_alert_additional_btn_next').css('display', 'none');
            }

            margin = parseInt(margin);
            margin = margin - width;

            LockButton(this, '#basket_alert_additional_btn_prev');

            $(this).prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({
                marginLeft: margin
            }, 200);

        });

        /// Слайдер влево ///

        $('#basket_alert_additional_btn_prev').click(function () {


            var margin = $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').css('margin-left');

            margin = parseInt(margin);
            margin = margin + width;

            if (margin == 0) {
                $('#basket_alert_additional_btn_next').css('display', 'block');
                $('#basket_alert_additional_btn_prev').css('display', 'none');
            }

            LockButton(this, '#basket_alert_additional_btn_prev');

            $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({
                marginLeft: margin
            }, 200);

        });
}

function LockButton(object_1, object_2) {
    var LockInterval = setInterval(function () {
        $(object_1).css('pointer-events', 'none');
    });

    setTimeout(function () {
        $(object_1).css('pointer-events', 'painted');
        clearInterval(LockInterval);
    }, 200);
}

//////////////////////////
