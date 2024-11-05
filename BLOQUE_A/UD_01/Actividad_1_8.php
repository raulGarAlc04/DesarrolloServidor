<?php
    $items = 7;
    $cost = 8;
    $subtotal = $cost * $items;
    $tax = ($subtotal / 100) * 20;
    $total = $subtotal + $tax;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1.8 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost: <?= $cost ?></p>
    <p>Subtotal: <?= $subtotal ?></p>
    <p>Tax: <?= $tax ?></p>
    <p>Total: <?= $total ?></p>
</body>
</html>