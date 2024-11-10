<?php
    $counter = 1;
    $packs = 5;
    $price = 1.99;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 7.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Prices for multiple packs</h2>
    <p>
        <?php
            while ($counter <= $packs) {
                echo $counter;
                echo ' packs cost $';
                echo $price * $counter;
                echo '<br>';
                $counter++;
            };
        ?>
    </p>
</body>
</html>