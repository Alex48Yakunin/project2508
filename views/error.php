<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/404Error.css">

    <title><?php echo $type_error ?> Ошибка</title>
</head>

<body>

    <h1>
        Упс...
        <br>
        <span><?php echo $error_text ?></span>
    </h1>
    <h2>
        Через <span id="error_timer">10</span> секунд вы будете перенаправлены на главную страницу
    </h2>
    <img src="../images/images/cat.png">


<script src="../lib/jquery-3.3.1.js"></script>
<script src="../js/error.js"></script>

</body>

</html>
