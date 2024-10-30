<?php
    $name = "Raul";
    $favorites = [
        'mints',
        'chocolate',
        'fudge',
        'toffee',
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1.1 Bloque A Raúl García</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favourite candy is: <?= $favorites[0] ?>.</p>
</body>
</html>