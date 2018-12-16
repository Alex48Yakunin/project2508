<?php 
    $admin_page_title = 'Заказы';
?>
<?php require_once "../templates/admin_header.php" 
?> 

<h1 class="text-center mt-4 mb-4">Заказы</h1>

<?php 
foreach ($orders as $key => $order) {
    require '../templates/admin_order.php';
}?>
        
<?php require_once "../templates/admin_footer.php" ?> 
