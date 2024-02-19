<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header('Location: /login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once __DIR__ .  '/components/head.php';
    ?>
    <title>Add Tickets</title>
</head>

<body>
    
    <?php
        require_once __DIR__ .  '/components/header.php';
    ?>

    <section class="add">
        <div class="container">
            <?php
                if (isset($_SESSION['fields_tickets']) && empty($_SESSION['login_error'])) {
            ?>
                <div class='add__validate'>Проверьте правильность заполнение полей</div>
            <?php
                $fields_tickets = $_SESSION['fields_tickets'];
                unset($_SESSION['fields_tickets']);
                }
            ?>
            <?php
                if (isset($_SESSION['login_error'])) {
            ?>
                <div class='add__validate'>Для добавления заявки нужно быть авторизованным</div>
            <?php
                unset($_SESSION['login_error']);
                }
            ?>
            <h1 class="add__title">Добавить заявку</h1>
            <form class="add__form" action='/actions/tickets/store.php' method='POST' enctype="multipart/form-data">
                <label>Тема заявки</label>
                <input value='<?= $fields_tickets['title']['value'] ?? '' ?>' class="add__input-tema <?= $fields_tickets['title']['error'] ? 'add__input-color' : '' ?>" type="text" name='title'>
                <label>Изображение</label>
                <input value='<?= $fields_tickets['image']['value'] ?? '' ?>' class="add__input-img <?= $fields_tickets['image']['error'] ? 'add__input-color' : '' ?> " type="file" name='image'>
                <label>Описание</label>
                <textarea name="description" class="<?= $fields_tickets['description']['error'] ? 'add__input-color' : '' ?>" cols="30" rows="10"><?= $fields_tickets['description']['value'] ?? '' ?></textarea>
                <input class="add__btn" type="submit" value="Добавить заявку">
            </form>
        </div>
    </section>

</body>

</html>