$(document).ready(function () {
    
    i = 10;
    
    setInterval(function () {
        $('#error_timer').text(i);
        i--;
        if (i == -1) {
            window.location.href = '../controllers/main_page.php';
        }
    }, 1000);

});
