$(document).ready(function () {
   
    //////  Кнопки  ///////
    
    $('#close_cross').click(function(){
        $('.basket_alert').css('display', 'none');
    });
    $('.basket_alert_btns_close').click(function(){
        $('.basket_alert').css('display', 'none');
    });
    $('#button_to_basket').click(function(){
        location.href = "../controllers/cart.php";
    });
    
    ///     Слайдер     ///
    
    var width = $('.basket_alert_additional-item').css('width');
    width = parseInt(width);
    width = width + 16;
    i = 1;
    
    /// Слайдер вправо ///
    
    $('#basket_alert_additional_btn_next').click(function () {
        
        var margin = $(this).prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').css('margin-left');
        
        margin = parseInt(margin);
        
        margin = margin - width;

        LockButton(this, '#basket_alert_additional_btn_prev');
        
        $(this).prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({marginLeft: margin}, 200);
        
    });
    
    /// Слайдер влево ///
    
    $('#basket_alert_additional_btn_prev').click(function () {

        
        var margin = $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').css('margin-left');
        
        margin = parseInt(margin);
        
        margin = margin + width;
        
        LockButton(this, '#basket_alert_additional_btn_prev');
        
        $(this).prev().prev('.basket_alert_additional-slider').children('.basket_alert_additional-slider_box').animate({marginLeft: margin}, 200);
        
    });

});

/// Функция блокировки кнопок ///

function LockButton(object_1, object_2) {
    var LockInterval = setInterval(function () {
        $(object_1).css('pointer-events', 'none');
    });

    setTimeout(function () {
        $(object_1).css('pointer-events', 'painted');
        clearInterval(LockInterval);
    }, 200);
}
