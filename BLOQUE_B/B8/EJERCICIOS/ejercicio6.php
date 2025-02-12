<?php
$tz_esp = new DateTimeZone('Europe/Madrid');
$tz_LDN   = new DateTimeZone('Europe/London');
$tz_TYO   = new DateTimeZone('Asia/Tokyo');

$fechaEspaña = new DateTime('2024-10-16 15:30:00', $tz_esp);
$fechaLondres = new DateTime($fechaEspaña->format('Y-m-d H:i:s'), $tz_LDN);
$fechaTokio = new DateTime($fechaEspaña->format('Y-m-d H:i:s'), $tz_TYO);

$locationLDN = $tz_LDN->getLocation();
$locationTYO = $tz_LDN->getLocation();

$interval = new DateInterval('P7D');
$period = new DatePeriod($fechaEspaña, $interval, 4);
?>
<?php include './includes/header.php' ?>
<p><b>Informacion de la zona horaria </b><?= $tz_LDN->getName() ?></p>
<p>
    <b>Longitud: </b><?= $locationLDN['longitude'] ?><br>
    <b>Latitud: </b><?= $locationLDN['latitude'] ?></p>
<p><b>Offset: </b><?= $fechaLondres->getOffset() / (60 * 60)?></p>
<p><b>Transiciones horario verano: </b>
    <?php 
    $transiciones = $tz_LDN->getTransitions();
    foreach ($transiciones as $transicion) { ?>
        <p><b>Fecha: </b> <?= date('Y-m-d H:i:s', $transicion['ts']) . ", Offset: {$transicion['offset']} segundos" ?></p>
   <?php } ?>
</p>

<p><b>Informacion de la zona horaria </b><?= $tz_TYO->getName() ?></p>
<p>
    <b>Longitud: </b><?= $locationTYO['longitude'] ?><br>
    <b>Latitud: </b><?= $locationTYO['latitude'] ?></p>
<p><b>Offset: </b><?= $fechaTokio->getOffset() / (60 * 60)?></p>
<p><b>Transiciones horario verano: </b>
    <?php 
    $transiciones = $tz_TYO->getTransitions();
    foreach ($transiciones as $transicion) { ?>
        <p><b>Fecha: </b> <?= date('Y-m-d H:i:s', $transicion['ts']) . ", Offset: {$transicion['offset']} segundos" ?></p>
   <?php } ?>
</p>
<p><b>Eventos recurrentes</b></p>
<?php foreach ($period as $evento) { ?>
    <p><b>Evento en Madrid: </b> <?= $evento->format('Y-m-d H:i:s') ?></p>
    <?php 
        $eventoLondres = new DateTime($evento->format('Y-m-d H:i:s'), $tz_LDN);
        $eventoTokio = new DateTime($evento->format('Y-m-d H:i:s'), $tz_TYO);
    ?>
    <p><b>Evento en Londres: </b> <?= $eventoLondres->format('Y-m-d H:i:s') ?></p>
    <p><b>Evento en Tokio: </b> <?= $eventoTokio->format('Y-m-d H:i:s') ?></p>
<?php } ?>
<?php include './includes/footer.php' ?>