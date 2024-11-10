<?php
    $products = [
        'Toffee' => 2.99,
        'Mints' => 1.99,
        'Fudge' => 3.49,
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 11.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Price list</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td>$<?= $price ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>