<?php
    $crearFechaEvento = date_create_from_format('d-m-Y H:i:s', '16-10-2024 15:30:00');
?>
<?php include './includes/header.php' ?>
<p><b>Fecha de comienzo del evento: </b><?= $crearFechaEvento->format('Y-m-d H:i:s') ?></p>
<p><b>Obtener fecha mediante getTimestamp(): </b><?= $crearFechaEvento->getTimestamp() ?></p>
<p><b>Fecha en formato legible: </b> <?= $crearFechaEvento->format('j M Y, H:i') ?></p>
<?php include './includes/footer.php' ?>