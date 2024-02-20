<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/scss/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;400;500;600&display=swap" rel="stylesheet">
    <script defer src="src/js/script.js"></script>

<?php
    require_once __DIR__ . '/../app/requires.php';

    $user = false;
    if(isset($_SESSION['user'])) {
        $query = $db->prepare("SELECT * FROM `users` WHERE `id` = :id");
        $query->execute([
            'id' => $_SESSION['user']
        ]);
        $user = $query->fetch(PDO::FETCH_ASSOC);       
    }              
?>