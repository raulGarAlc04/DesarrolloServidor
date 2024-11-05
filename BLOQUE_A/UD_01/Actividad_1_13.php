<?php
    $username = "Raul";
    $greeting = "Hola, " . $username . ".";
    $offer = [
        "item" => "Menú del día",
        "qty" => 2,
        "price" => 20,
        "discount" => 2,
    ];
    $primeros = [
        "Macarrones",
        "Pez espada",
        "Ensalada Mixta",
    ];

    $segundos = [
        "Solomillo",
        "Calamares",
        "Paella",
    ];

    $postres = [
        "Tarta",
        "Profiteroles",
        "Fruta variada",
    ];
    $usual_price = $offer["qty"] * $offer["price"];
    $offer_price = $offer["qty"] * ($offer["price"] / $offer["discount"]);
    $saving = $usual_price - $offer_price; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1.13 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/styles_02.css">
</head>
<body>
    <h1>Restaurante Etcheverry</h1>
    <p><?= $greeting ?></p>
    <h2>Oferta de menu 2x1</h2>
    <h3>Platos incluidos en el menu</h3>
    <h4>Primeros</h4>
    <ul>
        <li><?= $primeros[0] ?></li>
        <li><?= $primeros[1] ?></li>
        <li><?= $primeros[2] ?></li>
    </ul>
    <h4>Segundos</h4>
    <ul>
        <li><?= $segundos[0] ?></li>
        <li><?= $segundos[1] ?></li>
        <li><?= $segundos[2] ?></li>
    </ul>
    <h4>Postres</h4>
    <ul>
        <li><?= $postres[0] ?></li>
        <li><?= $postres[1] ?></li>
        <li><?= $postres[2] ?></li>
    </ul>
    <p class = "sticker">Ahorras $<?= $saving ?></p>
    <p>Pide <?= $offer["qty"] ?> menus <?= $offer["item"] ?> por $<?= $offer_price ?><br>(Precio normal $<?= $usual_price ?>)</p>
</body>
</html>