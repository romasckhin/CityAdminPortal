<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once __DIR__ .  '/components/head.php';
    ?>
    <title>CityAdminPortal</title>
</head>

<body>
    
    <?php
        require_once __DIR__ .  '/components/header.php';
        require_once __DIR__ .  '/app/requires.php';
    ?>

    <section class="add">
        <div class="container">

            <?php
                if (isset($_SESSION['success']) && empty($_SESSION['fields'])) {
            ?>
                <div class='add__success'><?=$_SESSION['success']?></div>
            <?php
                unset($_SESSION['success']);
                }

                if (isset($_SESSION['fields'])) {
            ?>
                <div class='add__validate'>Проверьте правильность заполнение полей</div>
            <?php
                $fields = $_SESSION['fields'];
                unset($_SESSION['fields']);
                }
            ?>

            <h1 class="add__title">Авторизация</h1>
            <form class="add__form" action='/actions/user/login.php' method='POST'>
                <label>E-mail</label>
                <input value='<?=$fields['email']['value'] ?? '' ?>' class="add__input-tema <?=$fields['email']['error'] ? 'add__input-color' : '' ?>" type="text" name='email'>
                <label>Пароль</label>
                <input class="add__input-tema <?=$fields['password']['error'] ? 'add__input-color' : '' ?>" type="text" name='password'>
                <input class="add__btn" type="submit" value="Войти">
            </form>
        </div>
    </section>

</body>

</html>