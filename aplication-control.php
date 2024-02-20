<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once __DIR__ .  '/components/head.php';

        if (isset($_SESSION['user'])) {
            $config = require_once __DIR__ . '/config/app.php';
            if ($user['group_id'] !== $config['admin_user_group']) {
                header('Location: /');
                exit();
            }
        }

    ?>
    <title>Tickets Control</title>
</head>

<body>
    
    <?php
        require_once __DIR__ .  '/components/header.php';
    ?>

    <section class="myAplication">
        <div class="container">
            <h1 class="myAplication__title">Управление Заявками</h1>
            <table>
                <tr>
                    <th>Изображение</th>
                    <th>Название</th>
                    <th>Описание</th>
                    <th>Статус</th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <td><img src="src/img/image-1.jpg" class="myAplication__img alt=""></td>
                    <td>Убрать мусор</td>
                    <td>Тут давно не кто не уберал, срочно!!!</td>
                    <td><span class="status-process">В процессе</span></td>
                    <td>
                        <div class="header__filter-block">
                            <div class="header__filter-block-header">
                                <span class="myAplication__filter-block-type" href="#">Действия</span>
                                <div class="header__filter-block-icon"></div>
                            </div>
                            <div class="header__filter-dropdown">
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Выполнено</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">В процессе</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Отклонить</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Удалить</div>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="src/img/image-1.jpg" class="myAplication__img alt=""></td>
                    <td>Убрать мусор</td>
                    <td>Тут давно не кто не уберал, срочно!!!</td>
                    <td><span class="status-done">Выполнено</span></td>
                    <td>
                        <div class="header__filter-block">
                            <div class="header__filter-block-header">
                                <span class="myAplication__filter-block-type" href="#">Действия</span>
                                <div class="header__filter-block-icon"></div>
                            </div>
                            <div class="header__filter-dropdown">
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Выполнено</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">В процессе</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Отклонить</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Удалить</div>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td><img src="src/img/image-1.jpg" class="myAplication__img alt=""></td>
                    <td>Убрать мусор</td>
                    <td>Тут давно не кто не уберал, срочно!!!</td>
                    <td><span class="status-created">Создано</span></td>
                    <td>
                        <div class="header__filter-block">
                            <div class="header__filter-block-header">
                                <span class="myAplication__filter-block-type" href="#">Действия</span>
                                <div class="header__filter-block-icon"></div>
                            </div>
                            <div class="header__filter-dropdown">
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Выполнено</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">В процессе</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Отклонить</div>
                                </a>
                                <a href="#">
                                    <div class="myAplication__filter-dropdown-item">Удалить</div>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>