<?php

session_start();

require_once __DIR__ . '/../../app/requires.php';
$config = require_once __DIR__ . '/../../config/app.php';

if (!isset($_SESSION['user'])) {
    header('Location: /my-aplication.php');
    exit();
}

$id = $_POST['id'];

$query = $db->prepare("SELECT * FROM `tickets` WHERE `id` = :id");
$query->execute([
    'id' => $id
]);
$tickets = $query->fetch(PDO::FETCH_ASSOC);


$query = $db->prepare("SELECT * FROM `users` WHERE `id` = :id");
$query->execute([
    'id' => $_SESSION['user']
]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($tickets['id'] !== $_SESSION['user'] && $config['admin_user_group'] !== $user['group_id'] ) {
    header('Location: /my-aplication.php');
    exit();
}

$query = $db->prepare("DELETE FROM `tickets` WHERE `id` = :id");
$query->execute([
    'id' => $id
]);



header('Location: /my-aplication.php');