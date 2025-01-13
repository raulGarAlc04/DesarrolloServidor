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
    $product = 'ERROR';
    $price = 'Please select a product';
}

?>
<?php include './includes/header.php' ?>

<?php foreach ($products as $key => $value) { ?>
  <a href="03_cadenaConsulta.php?product=<?= $key ?>"><?= $key ?></a>
<?php } ?>

<h1><?= $product ?></h1>
<p><?= $price ?></p>

<?php include './includes/footer.php' ?>