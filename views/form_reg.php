<?php $site_page_title = 'Регистрация'; require_once '../templates/header.php'; ?>

<form action="../controllers/handler_reg.php" method="post">
    Email:
    <input type="email" name="email" required>
    Password:
    <input type="password" name="pass" required>
    Repeat password:
    <input type="password" name="pass2" required>
    <input type="submit" value="Submit">
</form>

<div class="error">
    <?php echo $error_title; ?>
</div>

<?php require_once '../templates/footer.php'; ?>
