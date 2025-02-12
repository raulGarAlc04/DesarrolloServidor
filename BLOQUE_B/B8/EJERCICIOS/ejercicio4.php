<?php
    $fechaInicio = date_create_from_format('d-m-Y H:i:s', '16-10-2024 15:30:00');
    $fechaFinal = date_create_from_format('d-m-Y H:i:s', '17-10-2024 20:30:00');

    $duracion = $fechaFinal->diff($fechaInicio);

    $totalHoras = $duracion->days * 24 + $duracion->h;
?>
<?php include './includes/header.php' ?>
<p><b>Duracion del evento: </b><?= $duracion->format('%d dias, %h horas, %i minutos') ?></p>
<p><b>Horas totales del evento: </b><?= $totalHoras ?> horas</p>
<?php include './includes/footer.php' ?>