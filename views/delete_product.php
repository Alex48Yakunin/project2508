<?php require_once '../templates/admin_header.php'; ?>
<div id="delete-banner">
  <div class="delete-banner-inner col-3 rounded">
    <p>Точно удалить?</p>
    <a href="../controllers/handler_delete.php?product_id=<?php echo $product_id; ?>" class="btn btn-danger">Да, удаляем!</a>
    <a href="../controllers/admin_products_list.php" class="btn btn-secondary">Не уверен...</a>
  </div>
</div>
<?php require_once '../templates/admin_footer.php'; ?>
