$(document).ready(function () {
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'error.php', true);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState != 4) {
            return;
        }

        var error = JSON.parse(xhr.responseText);
          
    }
    

//    i = 10;
//    
//    setInterval(function () {
//        $('#error_timer').text(i);
//        i--;
//        if (i == -1) {
//            window.location.href = '../controllers/main_page.php';
//        }
//    }, 1000);

});
