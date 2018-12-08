<?php 
    $title = 'Пользователи';
?>

<?php require_once "../templates/admin_header.php" ?>

<h1 class="text-center mb-4">Пользователи</h1>
<div class="admin_users">
    <hr>
    <h2 class="text-center users_h2">Администраторы</h2>
    <hr>
    <div id="admin-users">
        <div class="user d-flex justify-content-between align-items-center mb-3">
            <img src="https://mangomark.com/storage/images/default_img/default_profile_pic_male.jpg" class="mr-4">

            <p id="user-name" class="mr-4 mb-0">AdministratorN1</p>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Действия
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Подробнее</a>
                    <a class="dropdown-item" href="#">Удалить</a>
                    <a class="dropdown-item" href="#">Сделать пользователем</a>
                </div>
            </div>
        </div>
        
        <div class="user d-flex justify-content-between align-items-center mb-3">
            <img src="https://mangomark.com/storage/images/default_img/default_profile_pic_male.jpg" class="mr-4">

            <p id="user-name" class="mr-4 mb-0">AdministratorN2</p>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Действия
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Подробнее</a>
                    <a class="dropdown-item" href="#">Удалить</a>
                    <a class="dropdown-item" href="#">Сделать пользователем</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="other_users">
    <hr>
    <h2 class="text-center users_h2">Пользователи</h2>
    <hr class="mb-4">
    <div id="site-users">
        <div class="user d-flex justify-content-between align-items-center mb-3">
            <img src="https://mangomark.com/storage/images/default_img/default_profile_pic_male.jpg" class="mr-4">

            <p id="user-name" class="mr-4 mb-0">Пользователь1</p>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Действия
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Подробнее</a>
                    <a class="dropdown-item" href="#">Удалить</a>
                    <a class="dropdown-item" href="#">!!!Сделать администратором!!!</a>
                </div>
            </div>
        </div>
        
        <div class="user d-flex justify-content-between align-items-center mb-3">
            <img src="https://mangomark.com/storage/images/default_img/default_profile_pic_male.jpg" class="mr-4">

            <p id="user-name" class="mr-4 mb-0">Пользователь2</p>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Действия
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Подробнее</a>
                    <a class="dropdown-item" href="#">Удалить</a>
                    <a class="dropdown-item" href="#">!!!Сделать администратором!!!</a>
                </div>
            </div>
        </div>
        
        <div class="user d-flex justify-content-between align-items-center mb-3">
            <img src="https://mangomark.com/storage/images/default_img/default_profile_pic_male.jpg" class="mr-4">

            <p id="user-name" class="mr-4 mb-0">Пользователь3</p>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Действия
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Подробнее</a>
                    <a class="dropdown-item" href="#">Удалить</a>
                    <a class="dropdown-item" href="#">!!!Сделать администратором!!!</a>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
</div>
<?php require_once "../templates/admin_footer.php" ?>
