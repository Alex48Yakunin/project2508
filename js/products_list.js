$(document).ready(function() {

getProducts();

//show form
$('#btn-product-create').click(function() {
    showHideForm();
})

//create product
$('#product-create').submit(function() {
    var title = $('#title').val();
    var description = $('#description').val();
    var price = $('#price').val();
    var collection = $('#collection').val();
    var category_id = $('#category').val();
    var data = {
        title: title,
        description: description,
        price: price,
        collection: collection,
        category_id: category_id
    }
    data = JSON.stringify(data);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controllers/handler_product_create.php', true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.send(data);
    xhr.onreadystatechange = function() {
        if(xhr.readyState != 4) {
            return;
        }
        if(xhr.status == 200) {
            showHideForm();
            $('#product-create')[0].reset();
            $('#product-alert').removeClass('alert-dark alert-danger').addClass('alert-dark').text('Товар создан.');
            getProducts();
            hideAlert();
        } else {
            $('#product-alert').removeClass('alert-danger alert-dark').addClass('alert-danger').text('Ошибка. Попробуйте еще раз.');
        }
    }
    
    return false;
})

})

var showHideForm = function(){
    var display = $('#div-product-create').css('display');
    $('#product-alert').removeClass('alert-dark alert-danger').text('');
    if(display == 'none'){
        $('#div-product-create').slideDown(500);
        $('#btn-product-create').text('Скрыть');
    } else {
        $('#div-product-create').slideUp(500);
        $('#btn-product-create').text('Создать товар');
    }
}

var hideAlert = function(){
    setTimeout(function(){
        $('#product-alert').hide();
    }, 5000)
}

var getProducts = function(){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controllers/get_products.php', true);
    xhr.send();
    xhr.onreadystatechange = function() {
        if(xhr.readyState != 4) {
            return;
        }
        var products = JSON.parse(xhr.responseText);
        $('#products-list').empty();
        products.forEach(function(product) {
            $('#products-list').append(
                '<tr>' + 
                    '<td>' +
                        '<div class="btn-group dropright burger">' +
                            '<button type="button" class="btn dropdown-toggle burger-inner" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                                '<img src="../images/icon/burger.png" alt="" title="Меню">' +
                            '</button>' +
                            '<div class="dropdown-menu border border-secondary rounded burger-menu">' +
                                '<a class="dropdown-item burger-menu-item" href="#">' +
                                    '<img src="../images/icon/update.png" alt="" title="Изменить">' +
                                '</a>' +
                                '<a class="dropdown-item burger-menu-item" href="#">' +
                                '<img src="../images/icon/delete.png" alt="" title="Удалить">' +
                                '</a>' +
                            '</div>' +
                        '</div>' +
                    '</td>' +
                    '<th scope="row">' + product.id + '</th>' +
                    '<td><a href="../controllers/admin_product.php?product_id=' + product.id + '" class="product-href">' + product.title + '</a></td>' +
                    '<td>' + product.description + '</td>' +
                    '<td>' + product.price + '</td>' +
                    '<td>' + product.category_id + '</td>' +
                    '<td>' + product.collection + '</td>' +
                '</tr>'
            );
        });
    }
}
