<?php
$products  = [
    'Apple_Pencil' => '45 Euros',
    'iPad' => '151 Euros',
    'MacBook' => '1242 Euros',
];
$product = $_GET['product'] ?? '';

$valid = array_key_exists($product, $products);

if ($valid) {
    $price = $products[$product];
} else {
    http_response_code(404);
    header('Location: 00_pagina_no_encontrada.php');
    exit;
}

?>
<?php include './includes/header.php' ?>

<?php foreach ($products as $key => $value) { ?>
  <a href="04_cadenaConsulta.php?product=<?= $key ?>"><?= $key ?></a>
<?php } ?>

<h1><?= $product ?></h1>
<p><?= $price ?></p>

<?php include './includes/footer.php' ?>