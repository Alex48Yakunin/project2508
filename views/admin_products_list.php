<?php require_once '../templates/admin_header.php'; ?>

<h1 class="text-center">Список товаров</h1>
<button type="button" class="btn btn-dark">Создать товар</button>
<div class="col-4" id="product-create">
  <form action="" method="POST" id="product-create">
    <span>Название</span>
      <input type="text" id="title" placeholder="Введите название товара" style="margin-top:10px"><br>
      <span>Описание</span>
      <input type="text" id="description" placeholder="Введите описание товара" style="margin-top:10px"><br>
      <span>Цена</span>
      <input type="number" id="price" placeholder="Введите цену товара" style="margin-top:10px"><br>
      <span>Коллекция</span>
      <select name="collection" id="collection" style="margin-top:10px">
        <?php 
          foreach ($collections as $collection) {
            echo '<option value="'.$collection->id.'">'.$collection->title.'</option>';
          };
        ?>
      </select><br>
      <span>Категория</span>
      <select name="category" id="category" style="margin-top:10px">
      <?php 
      foreach ($categories as $category) {
        echo '<option value="'.$category->id.'">'.$category->title.'</option>';
      };
      ?>
      </select><br>
      <span>Фото</span>
      <input type="file" id="photo" style="margin-top:10px"><br>
      <input type="submit" style="margin-top:10px">
  </form>
</div>
<table class="table table-hover" style="margin-top: 20px">
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
