<?php
    $price = 1.99;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 10.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Prices for large orders</h2>
    <p>
        <?php
            for ($i = 10; $i <= 200; $i = $i + 10) {
                echo $i;
                echo ' packs costs $';
                echo $price * $i;
                echo '<br>';
            };
        ?>
    </p>
</body>
</html>