<?php
    $username = "Raul";
    $greeting = "Hi, " . $username . ".";
    $offer = [
        "item" => "Chocolate",
        "qty" => 3,
        "price" => 6,
        "discount" => 4,
    ];
    $usual_price = $offer["qty"] * $offer["price"];
    $offer_price = $offer["qty"] * $offer["discount"];
    $saving = $usual_price - $offer_price;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1.12 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Multi-buy Offer</h2>
    <p><?= $greeting ?></p>
    <p class = "sticker">Save $<?= $saving ?></p>
    <p>Buy <?= $offer["qty"] ?> packs of <?= $offer["item"] ?> for $<?= $offer_price ?><br>(Usual price $<?= $usual_price ?>)</p>
</body>
</html>