<?php
    $packs = 10;
    $price = 2.99;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 8.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Prices for multiple packs</h2>
    <p>
        <?php
            do {
                echo $packs;
                echo ' packs costs $';
                echo $price * $packs;
                echo '<br>';
                $packs--;
            } while ($packs > 0);
        ?>
    </p>
</body>
</html>