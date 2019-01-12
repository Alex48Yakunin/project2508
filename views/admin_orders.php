<?php 
    $admin_page_title = 'Заказы';
?>
<?php require_once "../templates/admin_header.php" 
?> 

<h1 class="text-center mt-4 mb-4">Заказы</h1>

<?php 
foreach ($orders as $key => $order) {
    require '../templates/admin_order.php';
}
?>

<?php
    $pages = ceil($count_orders / $limit_orders);
    for ($i = 1; $i <= $pages; $i++) {
        if ($i == $page) {
            echo '<b>'.$i.'</b> ';
        } else {
            echo '<a href="?page='.$i.'">'.$i.'</a> ';
        }
    }
?>
        
<?php require_once "../templates/admin_footer.php" ?> 
