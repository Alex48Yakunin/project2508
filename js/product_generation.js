$(document).ready(function () {

    var category_id = '';
    
    var collection = $('.collection_id').attr('id');
    collection = collection.match(/\d+/);
    collection = Number.parseInt(collection);
    
    GetProducts(category_id, collection);

    $('.category_list').click(function () {

        $('.products').children().remove();

        var category_id = $(this).attr('id');
        category_id = category_id.match(/\d+/);
        category_id = Number.parseInt(category_id);

        GetProducts(category_id, collection)
    });
    
    
});

function GetProducts(category, collection) {
    $.post('get_products.php', {
        category_id: category,
        collection: collection
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
    });
}
