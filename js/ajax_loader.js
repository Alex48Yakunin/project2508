$(document)
    .ajaxStart(function () {
        $('#ajax-loader').css('display', 'flex');
    })
    .ajaxStop(function () {
        $('#ajax-loader').css('display', 'none');
    });
