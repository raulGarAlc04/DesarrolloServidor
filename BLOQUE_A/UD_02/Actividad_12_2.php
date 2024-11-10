<?php
    $best_sellers = ['Toffee', 'Mints', 'Fudge', 'M&M', 'Twix'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 12.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <?php foreach ($best_sellers as $candy) { ?>
        <p><?= $candy ?></p>
    <?php } ?>
    </table>
</body>
</html>