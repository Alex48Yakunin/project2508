<?php require_once '../templates/admin_header.php'; ?>

<h1 class="text-center">Список товаров</h1>
<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Наименование</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
      <th scope="col">Категория</th>
      <th scope="col">Коллекция</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($products as $product) {
        echo '<tr>
            <th scope="row">'.$product->id.'</th>
            <td><a href="../controllers/admin_product.php?product_id='.$product->id.'">'.$product->title.'</a></td>
            <td>'.$product->description.'</td>
            <td>'.$product->price.'</td>
            <td>'.$product->category_id.'</td>
            <td>'.$product->collection.'</td>
        </tr>';
    };
  ?>
  </tbody>
</table>


<?php require_once '../templates/admin_footer.php'; ?>
