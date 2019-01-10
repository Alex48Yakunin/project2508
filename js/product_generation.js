$(document).ready(function () {

    var category_id = '';
    
    var collection = $('.collection_id').attr('id');
    collection = collection.match(/\d+/);
    collection = Number.parseInt(collection);
    var price_min = Number.parseInt($('#min-price').val());
    var price_max = Number.parseInt($('#max-price').val());
    var title = '';



    GetProducts(category_id, collection, title, price_min, price_max);
    
    $('#seach').click(function () {

        $('.products').children().remove();
        var category_id = $('#category').attr('cat');
        category_id = ((category_id == "all")?"":Number.parseInt(category_id));
        var collection = $('.collection_id').attr('id');
        collection = collection.match(/\d+/);
        collection = Number.parseInt(collection);

        var price_min = Number.parseInt($('#min-price').val());
        var price_max = Number.parseInt($('#max-price').val());
        var title = $('#seach-title').val();

        GetProducts(category_id, collection, title, price_min, price_max);
        $('#filter').text('ФИЛЬТР: НАИМЕНОВАНИЕ:'+ ((title =="")?'Все':"%"+title+"%")+'.    КАТЕГОРИЯ: '+ ((category_id =="")?'Все':$('#category').text())+'.    ЦЕНА: '+'от '+$('#min-price').val()+'руб.'+' до '+$('#max-price').val()+'руб.');
    });
    
    
});

function GetProducts(category, collection, title, price_min, price_max) {
    $.post('get_products.php', {
        category_id: category,
        collection: collection,
        title: title,
        price_min: price_min,
        price_max: price_max
    }, function (data) {
        var products = JSON.parse(data);

        products.forEach(function (product) {
            $('.products').append(
                '<a href="../controllers/product.php?product_id=' + product.id + '" class="products-item">' +
                '<div class="products-item-photo" style="background-image: url(../images/picture/' + product.image + ')"></div>' +
                '<p class="products-item-title">' + product.title + '</p>' +
                '<p class="products-item-price">' + product.price + '</p>' +
                '</a>'
            );
        });

        if (products.length == 0) {
            $('.products').append(
            '<h2 class="no-goods"> Извините, товары не найдены...<h2>'
            );
        }
        
    });
}
