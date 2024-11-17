<?php
    $price = '4';
    $quantity = 3;

    function calculate_total(int $price, int $quantity) {
        return $price * $quantity;
    }

    $total = calculate_total($price, $quantity);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Chocolates</h2>
    <p>Total: $<?= $total; ?></p>
</body>
</html>