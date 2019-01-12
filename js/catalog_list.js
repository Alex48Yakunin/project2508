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
        var min = Number.parseInt($(this).attr('min'));
        var max = Number.parseInt($(this).attr('max'));
        var min_in = Number.parseInt($(this).val());
        if (min_in < min) {$(this).val(min);};
        if (min_in > max) {$(this).val(max)};
        if (min_in > Number.parseInt($('#max-price').val())) {$(this).val($('#max-price').val())};
        $('#price').text('от '+$('#min-price').val()+'руб.'+' до '+$('#max-price').val()+'руб.');
               
    });

    $('#max-price').change(function() {
        var min = Number.parseInt($(this).attr('min'));
        var max = Number.parseInt($(this).attr('max'));
        var max_in = Number.parseInt($(this).val());
        if (max_in < min) {$(this).val(min);};
        if (max_in > max) {$(this).val(max)};
        if (max_in < Number.parseInt($('#min-price').val())) {$(this).val($('#min-price').val())};
        $('#price').text('от '+$('#min-price').val()+'руб.'+' до '+$('#max-price').val()+'руб.');   
    });


    $('.catalog-select-list-row').click(function () {

      
        $(this).parent().prev('.catalog-select').children('p').text($(this).text());
        $(this).parent().prev('.catalog-select').children('p').attr('cat', $(this).attr('cat'));
       

        $(this).parent('.catalog-select-list').css('display', 'none');

        $(this).parent().prev().children('img').removeClass('catalog-menu-img-active');

        $('.catalog-list-item').css('pointer-events', 'painted');

    });


    // сворачивание списков при клике вне их  
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