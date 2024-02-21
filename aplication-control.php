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
                <thead> 
                    <tr>
                        <th>Изображение</th>
                        <th>Название</th>
                        <th>Описание</th>
                        <th>Статус</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $tickets = $db->query("SELECT * FROM `tickets`")->fetchAll(PDO::FETCH_ASSOC);
                        $statuses = $db->query("SELECT * FROM `status`")->fetchAll(PDO::FETCH_ASSOC);
                        
                        foreach ($tickets as $item) {
                        $status_id = $item['status_id'];
                        $status = array_filter($statuses, function($status) use ($status_id){
                            return $status_id === $status['id'];
                        });
                        $status = array_pop($status);
                    ?>
                    <tr>
                        <td><img src="<?= $item['image'] ?>" class="myAplication__img alt=""></td>
                        <td><?= $item['title'] ?></td>
                        <td><?= $item['description'] ?></td>
                        <td><span style="background: <?= $status['background'] ?>; color: <?= $status['color'] ?> " class="status-process"><?= $status['label'] ?></span></td>
                        <td>    
                            <div class="header__filter-block">
                                <div class="header__filter-block-header">
                                    <span class="myAplication__filter-block-type" href="#">Действия</span>
                                    <div class="header__filter-block-icon"></div>
                                </div>
                                <div class="header__filter-dropdown">
                                    <form action="/actions/tickets/change_status.php" method='POST'>
                                        <input type="hidden" name='id' value='<?= $item['id'] ?>'>
                                        <input type="hidden" name='status' value='<?= $config['status_successfully'] ?>'>
                                        <button class="myAplication__filter-dropdown-item">Выполнено</button>
                                    </form>
                                    <form action="/actions/tickets/change_status.php" method='POST'>
                                        <input type="hidden" name='id' value='<?= $item['id'] ?>'>
                                        <input type="hidden" name='status' value='<?= $config['status_in_progress'] ?>'>
                                        <button class="myAplication__filter-dropdown-item">В процессе</button>
                                    </form>
                                    <form action="/actions/tickets/change_status.php" method='POST'>
                                        <input type="hidden" name='id' value='<?= $item['id'] ?>'>
                                        <input type="hidden" name='status' value='<?= $config['status_reject'] ?>'>
                                        <button class="myAplication__filter-dropdown-item">Отклонить</button>
                                    </form>
                                    <form action="/actions/tickets/change_status.php" method='POST'>
                                        <input type="hidden" name='id' value='<?= $item['id'] ?>'>
                                        <button class="myAplication__filter-dropdown-item">Удалить</button>
                                </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php
                        }

                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>