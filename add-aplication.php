<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once __DIR__ .  '/components/head.php';
    ?>
    <title>Add applications</title>
</head>

<body>
    
    <?php
        require_once __DIR__ .  '/components/header.php';
    ?>

    <section class="add">
        <div class="container">
            <h1 class="add__title">Добавить заявку</h1>
            <form class="add__form">
                <label>Тема заявки</label>
                <input class="add__input-tema" type="text">
                <label>Изображение</label>
                <input class="add__input-img" type="file">
                <label>Описание</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <input class="add__btn" type="submit" value="Добавить заявку">
            </form>
        </div>
    </section>

</body>

</html>