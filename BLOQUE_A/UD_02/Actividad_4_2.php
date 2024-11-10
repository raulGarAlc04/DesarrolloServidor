<?php
    $stock = 0;
    $ordered = 3;

    if ($stock > 0) {
        $message = 'In stock';
    } elseif ($ordered > 0) {
        $message = 'Comming soon';
    } else {
        $message = 'Sold out';
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>
</html>