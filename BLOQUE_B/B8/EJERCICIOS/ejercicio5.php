<?php
    $fechaInicio = date_create_from_format('d-m-Y H:i:s', '16-10-2024 15:30:00');
    $fechaFin = date_create_from_format('d-m-Y H:i:s', '16-12-2024 15:30:00');
    $interval = new DateInterval('P7D');
    $period = new DatePeriod($fechaInicio, $interval, $fechaFin);

    $i = 1;
?>
<?php include './includes/header.php' ?>
<p>
    <?php foreach ($period as $semana) { ?>
        <b>Semana <?= $i ?>:</b> <?= $semana->format('j M Y') ?><br>
        <?php $i++; ?>
    <?php } ?>
</p>
<?php include './includes/footer.php' ?>