<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        require_once __DIR__ .  '/components/head.php';
    ?>
    <title>My Tickets</title>
</head>

<body>
    
    <?php
        require_once __DIR__ .  '/components/header.php';
    ?>

    <section class="myAplication">
        <div class="container">
            <h1 class="myAplication__title">Мои заявки</h1>
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
                        $query = $db->prepare("SELECT * FROM `tickets` WHERE `user_id` = :user_id ");
                        $query->execute([
                            'user_id' => $_SESSION['user'] ?? NULL
                        ]);
                        $tickets = $query->fetchAll(PDO::FETCH_ASSOC);

                        $query = $db->query("SELECT * FROM `status`")->fetchAll(PDO::FETCH_ASSOC);

                        foreach($tickets as $item) {
                            
                            $status_id = $item['status_id'];
                            $status = array_filter($query, function($status) use ($status_id) {
                                return $status['id'] === $status_id;
                            });
                            $status = array_pop($status);
                    ?>

                            <tr>
                                <td><img src="<?=$item['image']?>" class="myAplication__img alt=""></td>
                                <td><?=$item['title']?></td>
                                <td><?=$item['description']?></td>
                                <td><span style="background: <?= $status['background'] ?>; color: <?= $status['color'] ?> " class="status-process"><?= $status['label'] ?></span></td>
                                <td>
                                    <div class="header__filter-block">
                                        <div class="header__filter-block-header">
                                            <span class="myAplication__filter-block-type" href="#">Действия</span>
                                            <div class="header__filter-block-icon"></div>
                                        </div>
                                        <div class="header__filter-dropdown">
                                            <form action="/actions/tickets/remove.php" method='POST'>
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