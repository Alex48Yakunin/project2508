<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo "$site_page_title" ?></title>
</head>

<body>
    <header>
        <nav class="wrapper-inner">
            <div class="header-nav">
                <div class="header-nav__item">
                    <a href="../controllers/main_page.php" class="header-nav__link header-nav__logo"></a>
                    <a href="../controllers/catalog.php?collection=1" class="header-nav__link">Женщинам</a>
                    <a href="../controllers/catalog.php?collection=2" class="header-nav__link">Мужчинам</a>
                    <a href="../controllers/catalog.php?collection=3" class="header-nav__link">Детям</a>
                    <a href="" class="header-nav__link">Новинки</a>
                    <a href="" class="header-nav__link">О нас</a>
                </div>
                <div class="header-nav__item">
                    <a href="" class="header-nav__link header-nav__link_come">Войти</a>
                    <a href="../views/cart.php" class="header-nav__link header-nav__link_cart">
                        Корзина
                        <span class="header-nav__cart-count">(0)</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <main class="wrapper-inner">

   