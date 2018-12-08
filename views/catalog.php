<?php 
require_once '../templates/header.php'; ?>

<h1>МУЖЧИНАМ</h1>
<p>Все товары</p>

<?php
foreach ($products as $product) {
    echo '<div class="product" style="margin: 50px">
            <p>'.$product->title.'</p>
            <p>'.$product->price.'</p>
        </div>';
    
} 
?>

<?php require_once '../templates/footer.php'; ?>
