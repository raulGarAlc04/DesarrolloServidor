<?php
    $stock = 25;

    if ($stock >= 10) {
        $message = 'Good availability';
    }
    if ($stock > 0 && $stock < 10) {
        $message = 'Low stock';
    }
    if ($stock == 0) {
        $message = 'Out of stock';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 13.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <?php require_once './includes/header.php'; ?>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
    <?php require_once './includes/footer.php'; ?>
</body>
</html>