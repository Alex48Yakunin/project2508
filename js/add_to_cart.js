$(document).ready(function () {

    var product_id = getUrlVars()["product_id"];

    function getUrlVars() {
        //извлекаем get параметр product_id
        var vars = {};
        var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
            vars[key] = value;
        });
        return vars;
    }

    var size_id = $('.product__views-link').dataset.sizeId; // получаем size_id

    $('.product__desc-button_link').click(function (event) {
        event.preventDefault();
        $.post('add_to_cart.php', {
            product: product_id,
            size: size_id
        }, function (data) {
            if (Request.readyState == 4) {
                alert('Товар добавлен в корзину');
            } else {
                alert('Что-то пошло не так...попробуйте ещё раз');
            }
        });
    }) // end click
})
