$(document).ready(function () {


    $('.catalog-select').click(function () {

        var menu_list = $(this).next('.catalog-select-list');
        var row = $(this).next('.catalog-select-list').children('.catalog-select-list-row');

        var count_rows = row.length;
        var rows_hight = row.css('height');

        count_rows = Number.parseInt(count_rows);
        rows_hight = Number.parseInt(rows_hight);

        var list_height = 8 + count_rows * rows_hight;

        menu_list.css('bottom', '-' + list_height + 'px');

        /////////////    Переворот кнопки и раскрытие списка ///////////////

        if (menu_list.css('display') == 'none') {

            // $('.catalog-list-item').css('pointer-events', 'none');  // зачем вообще это свойство?
            // $(this).parent('.catalog-list-item').css('pointer-events', 'painted');  // зачем вообще это свойство?

            menu_list.css('display', 'block');
            $(this).children('img').addClass('catalog-menu-img-active');
        } else {

            $('.catalog-list-item').css('pointer-events', 'painted');

            menu_list.css('display', 'none');
            $(this).children('img').removeClass('catalog-menu-img-active');
        }


        /////////////////    Hover элементов списка  /////////////////////

        $('.catalog-select-list-row').mouseenter(function () {
            $(this).addClass('catalog-select-list-row-hover');
        });
        $('.catalog-select-list-row').mouseleave(function () {
            $(this).removeClass('catalog-select-list-row-hover');
        });


    });

   
    // спец обработчи для ценны на основе вырезки из обработчика Сергей

    $('.catalog-select-price').click(function () {

        var menu_list = $(this).next('.catalog-select-list-price');
        var row = $(this).next('.catalog-select-list-price').children('.catalog-select-list-row');

        var count_rows = row.length;
        var rows_hight = row.css('height');

        count_rows = Number.parseInt(count_rows);
        rows_hight = Number.parseInt(rows_hight);

        var list_height = 8 + count_rows * rows_hight;

        menu_list.css('bottom', '-' + list_height + 'px');

        /////////////    Переворот кнопки и раскрытие списка ///////////////

        if (menu_list.css('display') == 'none') {
            menu_list.css('display', 'block');
            $(this).children('img').addClass('catalog-menu-img-active');
        
        } else {

            menu_list.css('display', 'none');
            $(this).children('img').removeClass('catalog-menu-img-active');
            $('#price').text('от '+$('#min-price').val()+'руб.'+' до '+$('#max-price').val()+'руб.');
        }
    });

    // обработчики ограницений ввода максимальной и минимальной цены

    $('#min-price').change(function() {
        if ($(this).val() < $(this).attr('min')) {$(this).val($(this).attr('min'))};
        if ($(this).val() > $(this).attr('maх')) {$(this).val($(this).attr('max'))};
        console.log($(this).attr('max'));
        console.log($(this).attr('min'));
        
    });

    $('#maх-price').change(function() {
        if ($(this).val() < $(this).attr('min')) {$(this).val($(this).attr('min'))};
        if ($(this).val() > $(this).attr('maх')) {$(this).val($(this).attr('max'))};
        console.log($(this).attr('max'));
        console.log($(this).attr('min'));
        
    });


    $('.catalog-select-list-row').click(function () {

        if ($(this).hasClass('catalog-size') == true) {
            $(this).parent().prev('.catalog-select').children('p').text('Размер: ' + $(this).text());
        } else {
            $(this).parent().prev('.catalog-select').children('p').text($(this).text());
        }

        $(this).parent('.catalog-select-list').css('display', 'none');

        $(this).parent().prev().children('img').removeClass('catalog-menu-img-active');

        $('.catalog-list-item').css('pointer-events', 'painted');

    });


    // сворачивание списков при клике вне их  
    // adding agyakunin

    $(document).mouseup(function (e) { // событие клика по веб-документу
        var div = $(this).find(".catalog-list-item .catalog-select-list"); // тут указываем  элемент
        if (!div.is(e.target) // если клик был не по нашему блоку
            &&
            div.has(e.target).length === 0) { // и не по его дочерним элементам
            div.fadeOut("slow"); // скрываем его
            $('.catalog-select').children('img').removeClass('catalog-menu-img-active'); // возвращаем в нужное положение иконку
        }
    });

});