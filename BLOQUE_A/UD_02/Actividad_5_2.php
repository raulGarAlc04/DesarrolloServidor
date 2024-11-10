<?php
    $day = 'Wednesday';

    switch ($day) {
        case 'Monday':
            $offer = '20% off chocolates';
            break;
        case 'Tuesday':
            $offer = '20% off mints';
            break;
        default:
            $offer = 'Buy three packs, get one free';
            break;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Offers on <?= $day ?></h2>
    <p><?= $offer ?></p>
</body>
</html>