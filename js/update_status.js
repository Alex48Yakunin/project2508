$(document).ready(function() {
    console.log(1234);
$('#select-status').change(function() {
    console.log(123);
    var order_id = $(this).data('order-id');
    var status_id = $(this).val();
    var data = {
        order_id: order_id,
        status_id: status_id
    }
    data = JSON.stringify(data);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controllers/handler-change-status.php', true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.send(data);
    xhr.onreadystatechange = function() {
        if(xhr.readyState != 4) {
            return;
        }
    }
    return false;
})

})
