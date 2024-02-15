<?php

session_start();

require_once __DIR__ . '/../../app/requires.php';
$config = require_once __DIR__ . '/../../config/app.php';

if(!isset($_SESSION['user'])) {
    $_SESSION['login_error'] = true;
    header('Location: /add-aplication.php');
    exit();
}

$title = $_POST['title'];
$description = $_POST['description'];
$image = $_FILES['image'];

// validation

$error = false;

$fields_tickets = [
    'title' => [
        'value' => $title,
        'error' => false,
    ],
    'description' => [
        'value' => $description,
        'error' => false,
    ],
    'image' => [
        'error' => false,
    ]
];

if (empty($title)) {
    $fields_tickets['title']['error'] = true;
    $error = true;
}

if (empty($description)) {
    $fields_tickets['description']['error'] = true;
    $error = true;
}

if (empty($image['name'])) {
    $fields_tickets['image']['error'] = true;
    $error = true;
}

if ($error) {
    $_SESSION['fields_tickets'] = $fields_tickets;
    header('Location: /add-aplication.php');
    exit();
}

$patch = __DIR__ . '/../../uploads';
$filename = uniqid() . '-' . $image['name'];
    
if (!is_dir($patch)) {
    mkdir($patch);
}
    
move_uploaded_file($image['tmp_name'], "$patch/$filename");
    
$query = $db->prepare("INSERT INTO `tickets` (`image`,`title`,`description`,`status_id`,`user_id`) VALUES (:image, :title, :description, :status_id, :user_id)");
try {
    $query->execute([
        'image' => "uploads/$filename",
        'title' => $title,
        'description' => $description,
        'status_id' => $config['default_tickets_tag'],
        'user_id' => $_SESSION['user']
    ]);
    header('Location: /my-aplication.php');
} catch (\PDOException $exeption) {
    echo $exeption;
}


