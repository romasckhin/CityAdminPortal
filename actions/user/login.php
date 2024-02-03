<?php

session_start();

require_once __DIR__ . '/../../app/requires.php';

$email = $_POST['email'];
$password = $_POST['password'];

$error = false;

$fields = [
    'email' => [
        'value' => $email,
        'error' => false,
    ],
    'password' => [
        'error' => false,
    ]
];

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $fields['email']['error'] = true;
    $error = true;
}

if (empty($password)) {
    $fields['password']['error'] = true;
    $error = true;
}

if ($error) {
    $_SESSION['fields'] = $fields;
    header('Location: /login.php');
}