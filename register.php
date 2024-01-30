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
            <h1 class="add__title">Регистрация</h1>
            <form class="add__form" action='/actions/user/register.php' method='POST'>
                <?php
                    if(isset($_SESSION['fields'])) {
                ?>
                    <div class='add__validate'>Проверьте правильность заполнение полей</div>
                <?php
                    $fields = $_SESSION['fields'];
                    unset($_SESSION['fields']);
                }
                ?>
                <label>E-mail</label>
                <input value="<?= $fields['email']['value'] ?? '' ?>" class="add__input-tema <?= $fields['email']['error'] ? 'add__input-color' : '' ?>" type="text" name='email' require>
                <label>ФИО</label>
                <input value="<?= $fields['name']['value'] ?? '' ?>" class="add__input-tema <?= $fields['name']['error'] ? 'add__input-color' : '' ?>" type="text" name='name' require>
                <label>Дата рождения</label>
                <input value="<?= $fields['dob']['value'] ?? '' ?>" class="add__input-tema <?= $fields['dob']['error'] ? 'add__input-color' : '' ?>" type="date" name='dob' require>
                <label>Пароль</label>
                <input class="add__input-tema <?= $fields['password']['error'] ? 'add__input-color' : '' ?>" type="text" name='password' require>
                <label>Подтверждение пароля</label>
                <input class="add__input-tema <?= $fields['password_reset']['error'] ? 'add__input-color' : '' ?>" type="text" name='password_reset' require>
                <input class="add__btn" type="submit" value="Создать Аккаунт">
            </form>
        </div>
    </section>

</body>

</html>