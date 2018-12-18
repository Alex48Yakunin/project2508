<?php require_once '../templates/admin_header.php'; ?>

<h1 class="text-center">Список товаров</h1>
<p id="test"></p>
<button type="button" class="btn btn-dark" id="btn-product-create">Создать товар</button>
<span class="alert" id="product-alert"></span>
<div class="col-6" id="div-product-create">
  <form method="POST" id="product-create">
    <div class="form-group">
      <label for="exampleFormControlInput1">Название</label>
      <input class="form-control" type="text" id="title" placeholder="Введите название товара">
      <label for="exampleFormControlTextarea1">Описание</label>
      <textarea class="form-control" id="description" placeholder="Введите описание товара" rows="3"></textarea>
      <label for="exampleFormControlInput1">Цена</label>
      <input class="form-control" type="number" id="price" placeholder="Введите цену товара">
      <label for="exampleFormControlSelect1">Коллекция</label>
      <select class="form-control" name="collection" id="collection">
        <?php 
          foreach ($collections as $collection) {
            echo '<option value="'.$collection->id.'">'.$collection->title.'</option>';
          };
        ?>
      </select>
      <label for="exampleFormControlSelect1">Категория</label>
      <select class="form-control" name="category" id="category">
        <?php 
        foreach ($categories as $category) {
          echo '<option value="'.$category->id.'">'.$category->title.'</option>';
        };
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-dark" id="product-create">Создать</button>
  </form>
</div>
<table class="table table-hover products-table">
  <thead class="thead-dark">
    <tr>
      <th scope="col-md-auto"></th>
      <th scope="col">ID</th>
      <th scope="col">Наименование</th>
      <th scope="col">Описание</th>
      <th scope="col">Цена</th>
      <th scope="col">Категория</th>
      <th scope="col">Коллекция</th>
    </tr>
  </thead>
  <tbody id="products-list">

  </tbody>
</table>

<?php require_once '../templates/admin_footer.php'; ?>
