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

<?php
    require_once __DIR__ . '/database/db.php';
?>

<body>

    <?php
        require_once __DIR__ .  '/components/header.php';
    ?>

    <main>
        <section class="applications">
            <div class="container">
                <h1 class="applications__title">Заявки</h1>
                <div class="applications__box">
                    <img src="src/img/image-1.jpg" alt="img" class="applications__image">
                    <div class="applications__descr-min">Убрать мусор<span class="status-process">В
                            процессе</span></div>
                    <div class="applications__descr">Тут давно не кто не уберал, срочно!!!</div>
                    <div class="applications__date">Добавлено: 24.12.2021</div>
                </div>
                <div class="applications__box">
                    <img src="src/img/image-2.jpg" alt="img" class="applications__image">
                    <div class="applications__descr-min">Убрать мусор<span class="status-done">Выполнено</span></div>
                    <div class="applications__descr">Тут давно не кто не уберал, срочно!!!</div>
                    <div class="applications__date">Добавлено: 24.12.2021</div>
                </div>
                <div class="applications__box">
                    <img src="src/img/image-3.jpg" alt="img" class="applications__image">
                    <div class="applications__descr-min">Убрать мусор<span class="status-done">Выполнено</span></div>
                    <div class="applications__descr">Тут давно не кто не уберал, срочно!!!</div>
                    <div class="applications__date">Добавлено: 24.12.2021</div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>