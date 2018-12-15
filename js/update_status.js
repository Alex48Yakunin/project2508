$(document).ready(function() {

$('option').onchange(function() {
    var status_id = this.val();
    status_id = JSON.stringify(status_id);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../controllers/admin_orders.php', true);
    xhr.setRequestHeader("Content-type", "application/json");
    xhr.send(status_id);
    xhr.onreadystatechange = function() {
        if(xhr.readyState != 4) {
            return;
        }
        console.log(xhr.responseText);
    }
    return false;
})

})
