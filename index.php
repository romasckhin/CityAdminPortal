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
    ?>

    <main>
        <section class="applications">
            <div class="container">
                <h1 class="applications__title">Заявки</h1>
                <div class="applications__wrapper">
                    <?php
                        $tickets = $db->query("SELECT * FROM `tickets`")->fetchAll(PDO::FETCH_ASSOC);

                        $status = $db->query("SELECT * FROM `status`")->fetchAll(PDO::FETCH_ASSOC);

                        foreach($tickets as $item) {   

                            $status_id = $item['status_id'];
                            $filteredStatus = array_filter($status, function($status) use ($status_id){
                                return $status['id'] === $status_id;
                            });
                            $filteredStatus = array_pop($filteredStatus);
                    ?>
                    <div class="applications__box">
                        <img src="<?= $item['image'] ?>" alt="img" class="applications__image">
                        <div class="applications__descr-min"><?= $item['title'] ?>
                        <span style="background: <?= $filteredStatus['background'] ?>; color: <?= $filteredStatus['color'] ?> " class="status-process"><?= $filteredStatus['label'] ?></span>
                        </div>
                        <div class="applications__descr"><?= $item['description'] ?></div>
                        <div class="applications__date">Добавлено: <?= $item['created_at'] ?></div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </section>
    </main>

</body>

</html>