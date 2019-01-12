$(document).ready(function () {

    /// Кол-во отобр. вещей
    var show_count = 6;
    
    /// Размер слайдера ///
    ///Кол-во товара в предложке
    var products_count = $('.slider-item').length;
    
    //Размер 1 товара с учетом отступов css
    var width = $('.slider-item').css('width');
    width = parseInt(width);
    width = width + 16;
    
    //Размер слайдера
    var slider_width = products_count * width;
    $('.slider_box').css('width', slider_width);

    //Если товара меньше 4, слайдер не должен работать
    if (products_count <= 6){
        $('#slider_btn_next').css('display', 'none');
    }
    
    //////////// Слайдер вправо ////////////

    $('#slider_btn_next').click(function () {

        // Получение отступ элементов слайдера
        var margin = $(this).prev('.slider').children('.slider_box').css('margin-left');

        // Точка, когда скрывается кнопка с учетом того, что видно 4 продукта
        var hide_next_btn = -width * (show_count - 5) + 'px';

        // Показывать кнопку назад, когда 1 и больше элементов слева
        if (margin !== 0) {
            $('#slider_btn_prev').css('display', 'block');
        }

        //Скрывать кнопку вправо, когда там не осталось элементов
        if (margin == hide_next_btn) {
            $('#slider_btn_next').css('display', 'none');
        };

        //Отступ
        margin = parseInt(margin);
        margin = margin - width;

        //Скрывать кнопки, пока идет анимация
        lockButton(this, '#slider_btn_prev');

        //Анимация отступа
        $(this).prev('.slider').children('.slider_box').animate({
            marginLeft: margin
        }, 200);

    });

    /// Слайдер влево ///

    $('#slider_btn_prev').click(function () {

        // ПОлучение отступ элементов слайдера
        var margin = $(this).prev().prev('.slider').children('.slider_box').css('margin-left');

        //Отступ
        margin = parseInt(margin);
        margin = margin + width;
        
        // Пока слева есть минимум 1 товар
        var hide_next_btn = -width * (products_count - 4) + 'px';
        
        //Если слева нет товаров, то скрывается кнопка влево
        if (margin == 0) {
            $('#slider_btn_prev').css('display', 'none');
        }
        //
        if (margin < products_count) {
            $('#slider_btn_next').css('display', 'block');
        }
        
        //Скрывать кнопки, пока идет анимация
        lockButton(this, '#slider_btn_prev');

        //Анимация отступа
        $(this).prev().prev('.slider').children('.slider_box').animate({
            marginLeft: margin
        }, 200);

    });

});
//Функция скрывания кнопки, пока идет анимация
function lockButton(object_1, object_2) {
    var lockInterval = setInterval(function () {
        $(object_1).css('pointer-events', 'none');
    });

    setTimeout(function () {
        $(object_1).css('pointer-events', 'painted');
        clearInterval(lockInterval);
    }, 200);
}

