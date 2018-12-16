$(document).ready(function() {

$('#product-create').submit(function() {
    var title = $('#title').val();
    var description = $('#description').val();
    var price = $('#price').val();
    var collection = $('#collection').val();
    $.post('handler_product_create.php', {
        title: title,
        description: description,
        price: price,
        collection: collection
    }, function (data) {
        if (Request.readyState == 4) {
            alert('Товар создан');
        } else {
            alert('Что-то пошло не так...попробуйте ещё раз');
        }
    });
})

})