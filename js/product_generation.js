$(document).ready(function () {

    var category_id = '';

    var collection = $('.collection_id').attr('id');
    collection = collection.match(/\d+/);
    collection = Number.parseInt(collection);

    if (collection == 0) {
        collection = ''
    };
    var price_min = Number.parseInt($('#min-price').val());
    var price_max = Number.parseInt($('#max-price').val());
    var title = '';
    var page = 1;

    GetProducts(category_id, collection, title, price_min, price_max, page);

    $('#seach').click(function () {

        $('.products').children().remove();
        var category_id = $('#category').attr('cat');
        category_id = ((category_id == "all") ? "" : Number.parseInt(category_id));
        var collection = $('.collection_id').attr('id');
        collection = collection.match(/\d+/);
        collection = Number.parseInt(collection);
        if (collection == 0) {
            collection = ''
        };

        var price_min = Number.parseInt($('#min-price').val());
        var price_max = Number.parseInt($('#max-price').val());
        var title = $('#seach-title').val();

        GetProducts(category_id, collection, title, price_min, price_max, page);
        $('#filter').text('ФИЛЬТР: НАИМЕНОВАНИЕ:' + ((title == "") ? 'Все' : "%" + title + "%") + '.    КАТЕГОРИЯ: ' + ((category_id == "") ? 'Все' : $('#category').text()) + '.    ЦЕНА: ' + 'от ' + $('#min-price').val() + 'руб.' + ' до ' + $('#max-price').val() + 'руб.');
        window.history.pushState(category_id, "Title", "?collection=" + collection + "&category_id=" + category_id); // подмена url

    });


    $('.pages').on("click", ".pages-item", function () {
        $('.products').children().remove();
        var category_id = $('#category').attr('cat');
        category_id = ((category_id == "all") ? "" : Number.parseInt(category_id));
        var collection = $('.collection_id').attr('id');
        collection = collection.match(/\d+/);
        collection = Number.parseInt(collection);
        if (collection == 0) {
            collection = ''
        };

        var price_min = Number.parseInt($('#min-price').val());
        var price_max = Number.parseInt($('#max-price').val());
        var title = $('#seach-title').val();
        page = Number.parseInt($(this).text());


        GetProducts(category_id, collection, title, price_min, price_max, page);
        $('#filter').text('ФИЛЬТР: НАИМЕНОВАНИЕ:' + ((title == "") ? 'Все' : "%" + title + "%") + '.    КАТЕГОРИЯ: ' + ((category_id == "") ? 'Все' : $('#category').text()) + '.    ЦЕНА: ' + 'от ' + $('#min-price').val() + 'руб.' + ' до ' + $('#max-price').val() + 'руб.');
        window.history.pushState(category_id, "Title", "?collection=" + collection + "&category_id=" + category_id); // подмена url

    });
});


function GetProducts(category, collection, title, price_min, price_max, page) {
    $.post('get_products.php', {
        category_id: category,
        collection: collection,
        title: title,
        price_min: price_min,
        price_max: price_max,
        page: page
    }, function (data) {
        var data = JSON.parse(data);

        var products = data.products;
        if (products.length == 0) {
            $('.products').append(
                '<h2 class="no-goods"> Извините, товары не найдены...<h2>'
            );
        } else {
            products.forEach(function (product) {
                var productSizes = '';
                product.sizes.forEach(function (size) {
                    productSizes += '<option data-size-id = "' + size.id + '">' + size.value + '</option>';
                });
                $('.products').append(
                    '<a href="../controllers/product.php?product_id=' + product.id + '" class="products-item">' +
                    '<div class="products-item-photo" style="background-image: url(../images/picture/' + product.image + ')"></div>' +
                    '<p class="products-item-title">' + product.title + '</p>' +
                    '<p class="products-item-price">' + product.price + '</p>' +
                    '<p class="products-item-title"><select>' + productSizes + '<></select/p>' +
                    '<p class="products-item-cart"></p>' +
                    '</a>'
                );
            });
        }
        $('.products-item').click(function (e) {
            if ($('.products-item-photo').is(e.target)) {} else {
                e.preventDefault();
            }
        }); // возможность выбора размера


        $('.products-item-cart').click(function (event) {
            size_id = $(this).parents('.products-item').find('select').val();
            var product_id = getUrlVars()["product_id"];

            function getUrlVars() {
                //извлекаем get параметр product_id
                var vars = {};
                var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                    vars[key] = value;
                });
                return vars;
            }
            $.post('add_to_cart.php', {
                product_id: product_id,
                size_id: size_id
            }, function (data) {
                if (data) {
                    $('.basket_alert').css('display', 'block');
                    showModalWindow();
                } else {
                    alert('Что-то пошло не так...попробуйте ещё раз');
                }
            });
        }) // end click

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
        lockButton(this, '#basket_alert_additional_btn_prev');

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
        lockButton(this, '#basket_alert_additional_btn_prev');

        //Анимация отступа
        $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({
            marginLeft: margin
        }, 200);

    });
}


        $('.pages').children().remove();

        var limit_products = Number.parseInt($('.collection_id').data('limit'));

        var pages = Math.ceil(data.count / limit_products);

        for (var i = 1; i <= pages; i++) {
            if (i == page) {
                $('.pages').append('<div class="pages-item1">' + i + '</div>');
            } else {
                $('.pages').append(
                    '<div class="pages-item">' + i + '</div>'
                )
            }
        }
    })
}