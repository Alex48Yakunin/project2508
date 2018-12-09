$(document).ready(function () {

    $('.catalog-select').click(function () {

        var menu_list = $(this).next('.catalog-select-list');
        
        
        if (menu_list.css('display') == 'none') {
            menu_list.css('display', 'block');
            $(this).children('img').addClass('catalog-menu-img-active');
        } else {
            menu_list.css('display', 'none');
            $(this).children('img').removeClass('catalog-menu-img-active');
        }
        
        
        /////////////////    Замента текста на выбранный /////////////////////

        $(this).next('#select-menu-list').children('.select-menu-row').click(function () {

            $(this).parent().prev('.select-menu-header').children('#select-menu-header-text').text($(this).text());
            menu_list.css('display', 'none');
            $(this).parent().prev('.select-menu-header').children('#select-menu-img').removeClass('select-menu-header-img-active');
        });
        
        
        /////////////////    Замента текста на выбранный /////////////////////

        $(this).next('.catalog-select-list').children('.catalog-select-list-row').click(function () {
            
            if ($(this).hasClass('catalog-size') == true){
                $(this).parent().prev('.catalog-select').children('p').text('Размер: '+$(this).text());
            } else {
                $(this).parent().prev('.catalog-select').children('p').text($(this).text());
            }
            
            menu_list.css('display', 'none');
            
            $(this).parent().prev('.select-menu-header').children('#select-menu-img').removeClass('select-menu-header-img-active');
            
        });
        
        /////////////////    Hover элементов списка  /////////////////////
        
        $('.catalog-select-list-row').mouseenter(function () {
            $(this).addClass('catalog-select-list-row-hover');
        });
        $('.catalog-select-list-row').mouseleave(function () {
            $(this).removeClass('catalog-select-list-row-hover');
        });
    
    });
});
