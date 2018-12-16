$(document).ready(function () {

    $('.category_list').click(function(){
       
        
        var category_id = $(this).attr('id');
        category_id = category_id.match(/\d+/);
        category_id = Number.parseInt(category_id);
        
        var collection = $('.collection_id').attr('id');
        collection = collection.match(/\d+/);
        collection = Number.parseInt(collection);
        
        console.log(category_id + ' ' + collection);
        
        var data = {
            category_id: category_id,
            collection: collection
        }
        
        data = JSON.stringify(data);
        
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'get_products.php', true);
        xhr.setRequestHeader("Content-type", "application/json");
        xhr.send(data);
        
    });
    
    
    
    $.post('get_products.php', {

    }, function (data) {
        
        var products = JSON.parse(data);
        
        console.log(products);
        
        products.forEach(function(product){
            $('.products').append(
                '<a href="../controllers/product.php?product_id='+ product.id +'" class="products-item">' + 
                    '<div class="products-item-photo" style="background-image: url(../images/picture/'+ product.image +')"></div>' +
                    '<p class="products-item-title">'+ product.title +'</p>' +
                    '<p class="products-item-price">'+ product.price +'</p>' +
                '</a>'
            );
        });
    });

});
