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
    ?>

    <section class="add">
        <div class="container">
            <h1 class="add__title">Регистрация</h1>
            <form class="add__form">
                <label>E-mail</label>
                <input class="add__input-tema" type="text">
                <label>ФИО</label>
                <input class="add__input-img" type="text">
                <label>Дата рождения</label>
                <input class="add__input-img" type="date">
                <label>Пароль</label>
                <input class="add__input-img" type="text">
                <label>Подтверждение пароля</label>
                <input class="add__input-img" type="text">
                <input class="add__btn" type="submit" value="Создать Аккаунт">
            </form>
        </div>
    </section>

</body>

</html>