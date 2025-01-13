<?php
$products  = [
    'Apple_Pencil' => '45 Euros',
    'iPad' => '151 Euros',
    'MacBook' => '1242 Euros',
];
$product = $_GET['product'] ?? '';

$valid = array_key_exists($product, $products);

  if ($valid) {
  	$price = $cities[$product];
  } else {
  	$product    = 'Please select a location';
  	$price = '';
  }
?>

<?php include 'includes/header.php' ?>

<h1>Page not found</h1>
<p>Sorry, we could not find the page you were looking for.</p>
<a href="04_cadenaConsulta.php?product=iPad">Go back</a>

<?php include 'includes/footer.php' ?>