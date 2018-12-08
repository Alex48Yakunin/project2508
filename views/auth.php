<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>
        Страница авторизации
    </title>
</head>

<body>
    <header>
        <nav class="wrapper-inner">
            <div class="header-nav">
                <div class="header-nav__item">
                    <a href="../views/test.php" class="header-nav__link header-nav__logo"></a>
                </div>
            </div>
        </nav>
    </header>
    <main class="wrapper-inner">
        <section>
            <div class="auth">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Введите email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="wrapper-inner">
        <div class="footer">
            <div class="footer__item">
                <div class="footer__item-title">Коллекции</div>
                <a class="footer__item-link" href="">
                    Женщинам
                    <span class="footer__link-count">(1725)</span>
                </a>
                <a class="footer__item-link" href="">
                    Мужчинам
                    <span class="footer__link-count">(635)</span>
                </a>
                <a class="footer__item-link" href="">
                    Детям
                    <span class="footer__link-count">(2514)</span>
                </a>
                <a class="footer__item-link" href="">
                    Новинки
                    <span class="footer__link-count">(76)</span>
                </a>
            </div>
            <div class="footer__item">
                <div class="footer__item-title">Магазин</div>
                <a class="footer__item-link" href="">
                    О нам
                </a>
                <a class="footer__item-link" href="">
                    Доставка
                </a>
                <a class="footer__item-link" href="">
                    Работа с нами
                </a>
                <a class="footer__item-link" href="">
                    Контакты
                </a>
            </div>
            <div class="footer__item">
                <div class="footer__item-title">Мы в социальных сетях</div>
                <a class="footer__item-link" href="">
                    Сайт разработан в inordic.ru
                </a>
                <p class="footer__item-link">
                    2018 &copy; Все права защищены
                </p>
                <div class="footer__social">
                    <a href="" class="footer__social-link footer__social-link_tw"></a>
                    <a href="" class="footer__social-link footer__social-link_fac"></a>
                    <a href="" class="footer__social-link footer__social-link_inst"></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>