<?php
    function create_logo() {
        return '<img src="./img/logo.png" alt="logo">';
    }

    function write_copyright_notice() {
        $year = date('Y');
        $message = '&copy; ' . $year . ' The Candy Store';
        return $message;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <header>
        <h1><?= create_logo(); ?> The Candy Store</h1>
    </header>
    <article>
        <h2>Welcome to The Candy Store</h2>
    </article>
    <footer>
        <?= create_logo(); ?>
        <?= write_copyright_notice(); ?>
    </footer>
</body>
</html>