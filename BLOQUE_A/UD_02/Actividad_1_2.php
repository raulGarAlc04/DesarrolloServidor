<?php
    $name = '';
    $greeting = 'Hello';

    if ($name !== '') {
        $greeting = 'Welcome back, ' . $name;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
</body>
</html>