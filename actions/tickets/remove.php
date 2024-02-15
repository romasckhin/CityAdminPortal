<?php

session_start();

require_once __DIR__ . '/../../app/requires.php';

if (!isset($_SESSION['user'])) {
    header('Location: /my-aplication.php');
    exit();
}

$id = $_POST['id'];

$query = $db->prepare("DELETE FROM `tickets` WHERE `id` = :id");
$query->execute([
    'id' => $id
]);

header('Location: /my-aplication.php');