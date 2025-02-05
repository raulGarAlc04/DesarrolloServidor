<?php
$cities  = [
    'London' => '48 Store Street, WC1E 7BS',
    'Sydney' => '151 Oxford Street, 2021',
    'NYC'    => '1242 7th Street, 10492',
    'Tokio' => '3459 Matsuyama Shinjuku, 14940',
];
$city = $_GET['city'] ?? '';
if ($city) {
    $address = $cities[$city];
} else {
    $address = 'Please select a city';
}
?>
<?php include 'includes/header.php' ?>

<?php foreach ($cities as $key => $value) { ?>
  <a href="02_cadenaConsulta.php?city=<?= $key ?>"><?= $key ?></a>
<?php } ?>

<h1><?= $city ?></h1>
<p><?= $address ?></p>

<?php include 'includes/footer.php' ?>