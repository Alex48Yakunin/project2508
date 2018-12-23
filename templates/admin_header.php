<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="shortcut icon" href="../admin_favicon.ico" type="image/x-icon">
    <title><?php echo "$admin_page_title" ?></title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">Панель Администратора</a>
        <form class="form-inline">
            <label>Добро пожаловать,<span id="login_user_name">Сергей</span></label>

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Выйти</button>
        </form>
    </nav>
    <ul class="nav bg-light">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Добавить</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Категорию</a>
                <a class="dropdown-item" href="#">Товар</a>
                <a class="dropdown-item" href="#">Пользователя</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Заказы
            <span class="badge badge-success" id="new-order-count"><?=count($orders)?></span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../controllers/admin_orders.php">Все заказы</a>
                <a class="dropdown-item" href="../controllers/admin_orders.php?status=0">Ожидают подтверждения</a>
                <a class="dropdown-item" href="../controllers/admin_orders.php?status=1">Подтверждены</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="../controllers/admin_users.php">Пользователи <span class="badge badge-info"><?=count($users)?></span></a>
        </li>
    </ul>
    <div class="wrapper">