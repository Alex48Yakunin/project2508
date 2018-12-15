$(document).ready(function () {

    $('.select-menu-header').click(function () {

        /////////////////    Отступ списка /////////////////////

        var menu_list = $(this).next('#select-menu-list');
        var row = $(this).next().children('.select-menu-row');

        var count_rows = row.length;
        var rows_hight = row.css('height');

        count_rows = Number.parseInt(count_rows);
        rows_hight = Number.parseInt(rows_hight);

        var list_height = count_rows * rows_hight;

        $(this).next('#select-menu-list').css('bottom', '-' + list_height + 'px');


        /////////////////    Переворот кнопки и раскрытие списка /////////////////////

        if (menu_list.css('display') == 'none') {
            menu_list.css('display', 'block');
            $(this).children('#select-menu-img').addClass('select-menu-header-img-active');
        } else {
            menu_list.css('display', 'none');
            $(this).children('#select-menu-img').removeClass('select-menu-header-img-active');
        }


        /////////////////    Hover элементов списка  /////////////////////

        $('.select-menu-row').mouseenter(function () {
            $(this).addClass('select-menu-row-hover');
        });
        $('.select-menu-row').mouseleave(function () {
            $(this).removeClass('select-menu-row-hover');
        });
        
    });

    
    $('.select-menu-row').click(function () {

        if ($(this).parent().prev('.select-menu-header').children('.basket-select-card').length > 0) {

            $(this).parent().prev('.select-menu-header').children("img.basket-select-card").remove();

            $(this).children("img.basket-select-card").each(function () {
                $(this).clone(true).appendTo($(this).parent().parent().prev('.select-menu-header'));

            });
        }
        
        $(this).parent().prev('.select-menu-header').children('#select-menu-header-text').text($(this).text());
        $(this).parent('#select-menu-list').css('display', 'none');
        $(this).parent().prev('.select-menu-header').children('#select-menu-img').removeClass('select-menu-header-img-active');
        
    });

});
