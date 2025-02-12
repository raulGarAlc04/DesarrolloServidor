<?php
    $crearFechaEvento = date_create_from_format('d-m-Y H:i:s', '16-10-2024 15:30:00');
?>
<?php include './includes/header.php' ?>
<p><b>Fecha inicial: </b><?= $crearFechaEvento->format('Y-m-d H:i:s') ?></p>
<?php
    $crearFechaEvento->setDate(2024, 11, 17);
    $crearFechaEvento->setTime(18, 45);
?>
<p><b>Fecha modificada: </b><?= $crearFechaEvento->format('Y-m-d H:i:s') ?></p>
<?php
    $crearFechaEvento->setTimestamp(1698249600);
?>
<p><b>Fecha con timestamp: </b><?= $crearFechaEvento->format('Y-m-d H:i:s') ?></p>
<?php
    $crearFechaEvento->modify('+1 year 1 month');
?>
<p><b>Fecha modificada con modify: </b><?= $crearFechaEvento->format('Y-m-d H:i:s') ?></p>
<?php include './includes/footer.php' ?>