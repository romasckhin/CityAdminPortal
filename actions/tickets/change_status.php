<?php

session_start();

require_once __DIR__ . '/../../app/requires.php';
$config = require_once __DIR__ . '/../../config/app.php';


$query = $db->prepare("SELECT * FROM `users` WHERE `id` = :id");
$query->execute([
    'id' => $_SESSION['user']
]);
$user = $query->fetch(PDO::FETCH_ASSOC);


if ($config['admin_user_group'] !== $user['group_id'] ) {
    header('Location: /my-aplication.php');
    exit();
}

$id = $_POST['id'];
$status = $_POST['status'];

$query = $db->prepare("UPDATE `tickets` SET `status_id` = :status WHERE `id` = :id ");
try{
    $query->execute([
        'status' => $status,
        'id' => $id
    ]);   
    header('Location: /aplication-control.php');
} catch (\PDOException $exception) {
    echo $exception;
}