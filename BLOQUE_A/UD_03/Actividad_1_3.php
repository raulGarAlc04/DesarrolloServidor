<?php
    function write_logo() {
        echo '<img src="./img/logo.png" alt="logo">';
    }

    function write_copyright_notice() {
        $year = date('Y');
        echo '&copy; ' . $year . ' The Candy Store';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <header>
        <h1><?php write_logo(); ?> The Candy Store</h1>
    </header>
    <article>
        <h2>Welcome to The Candy Store</h2>
    </article>
    <footer>
        <?php write_logo(); ?>
        <?php write_copyright_notice(); ?>
    </footer>
</body>
</html>