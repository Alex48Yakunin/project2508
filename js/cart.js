$(document).ready(function() {
    // считаем размер корзины
    var cart_account = [];
    var i = 0;
        var block = $('main').children('div:nth-child(3)');
       while (block.is('.card-table-row')==true){
        i=i+1;
        var k=i+3;
        block = $('main').children('div:nth-child('+k+')');
        }
   
    //  подсчет итогов в корзине
    function cartAccount (cart_size) {
        var total_count = 0;
        var total_summ = 0;        
        for(var first = 3; first <= cart_size+2; first++) {
            var block1 = $('main').children('div:nth-child('+first+')').children('div:nth-child(2)');
            var block2 = $('main').children('div:nth-child('+first+')').children('div:nth-child(3)').children();
            var block3 = $('main').children('div:nth-child('+first+')').children('div:nth-child(4)');
            var summ = $(block1).text()*$(block2).val();
            $(block3).text(summ);
            total_count = total_count + Number.parseInt($(block2).val());
            total_summ = total_summ + summ;
        }
        first = first++;
        $('main').children('div:nth-child('+first+')').children('div:nth-child(3)').text(total_count);
        $('main').children('div:nth-child('+first+')').children('div:nth-child(4)').text(total_summ);
        return
    }

    // запись колличества товаров в корзине
    function cartSave (cart_size) {
        cart_account=[];
        for(var first = 3; first <= cart_size+2; first++) {
            var block2 = $('main').children('div:nth-child('+first+')').children('div:nth-child(3)').children();
            cart_account.push({count: $(block2).val()});
            
        }
        return
    }

    //   обработчики событий корзины

    cartAccount(i);

    $('.count').change(function() {
        cartAccount(i);
        cartSave (i);
        cart_account = JSON.stringify(cart_account);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../controllers/update_cart.php', true);
        xhr.setRequestHeader("Content-type", "application/json");
        console.log (cart_account);
        xhr.send(cart_account);
            xhr.onreadystatechange = function() {
            if (xhr.readyState != 4) {
                return;
            }}

        var session = JSON.parse(xhr.responseText);

        console.log(session);

        return false;
    });
    var last = 1;
    $('.delet').hover (function() {
        last = $(this).prev().val();
        $(this).prev().val(0);
    },
    function() {
        $(this).prev().val(last);
    });

    $('.delet').click(function() {
        $(this).prev().val(0);
        cartSave (i);
        cart_account = JSON.stringify(cart_account);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../controllers/delet_cart.php', true);
        xhr.setRequestHeader("Content-type", "application/json");
        console.log (cart_account);
        xhr.send(cart_account);
        //     xhr.onreadystatechange = function() {
        //     if (xhr.readyState != 4) {
        //         return;
        //     }}

        // var session = JSON.parse(xhr.responseText);

        // console.log(session);
        
        window.location.reload(true);

        return;

    });
    
    $('#order').click(function() {
        $('#form-order').css('display','block');
        $('.dark').css('display','block');
        $('#order').css('display','none');
    });

    $('.hide-order').click(function() {
        $('#form-order').css('display','none');
        $('.dark').css('display','none');
        $('#order').css('display','block');
    return false;
    });

    $('.butt-result-order').click(function() {
        $('#form-order').css('display','none');
        $('#form-pay').css('display','block');
    return false;
    });

    $('.hide-pay').click(function() {
        $('#form-order ').css('display','block');
        $('#form-pay').css('display','none');
    return false;
    });
   
});
