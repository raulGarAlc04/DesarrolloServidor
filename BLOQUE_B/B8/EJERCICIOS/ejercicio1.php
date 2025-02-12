<?php
    //$fechaActual = time();
    //$fechaActual = new DateTime();
    $fechaActual = strtotime('04/08/2025');
    $fechaActualDT = new DateTime('@' . $fechaActual);
    // Creamos un objeto de tipo DateTime, sin parametros, para que coja la fecha actual
    //$fechaActualDT = new DateTime();
    // Creamos la fecha de inicio del evento, mediante strtotime
    $fechaInicio = strtotime('05/01/2025');
    // Seguidamente convertimos esta fecha a un objeto DateTime para poder hacer las comparaciones
    $dateIni = new DateTime('@' . $fechaInicio);
    // Hacemos lo mismo con la fecha de finalización del evento
    $fechaFinal = mktime(23, 59, 0, 5, 6, 2025);
    $dateFin = new DateTime('@' . $fechaFinal);
    // Realizamos la diferencia entre la fecha actual y la fecha de inicio
    $diasRestantesFechaInicio = $fechaActualDT->diff($dateIni);
    // Realizamos la diferencia entre la fecha actual y la fecha de finalización
    $diasRestantesFechaFin = $fechaActualDT->diff($dateFin);
    // Obtenemos el número absoluto de días que hay entre las 2 fechas para ver cuanto queda para el evento, 
    // si está en curso,
    // o si ha finalizado
    $diasRestantesFechaInicio = $diasRestantesFechaInicio->days;
    $diasRestantesFechaFinal = $diasRestantesFechaFin->days;

    // Si la fecha actual es mayor a la fecha de inicio el resultado será negativo para evitar errores
    $diasRestantesFechaInicio = $fechaActualDT < $dateIni ? $diasRestantesFechaInicio : -$diasRestantesFechaInicio;
    // Si la fecha actual es mayor a la fecha de fin el resultado será negativo para evitar errores
    $diasRestantesFechaFinal = $fechaActualDT < $dateFin ? $diasRestantesFechaFinal : -$diasRestantesFechaFinal;
    // Damos formato a la fecha actual
    $fechaActualFormateada = $fechaActualDT->format('d-m-Y');

    $mensaje = '';

    if ($diasRestantesFechaInicio > 0) {
        $mensaje = 'Quedan ' . $diasRestantesFechaInicio . ' dias';
    } else if ($diasRestantesFechaInicio < 0 && $diasRestantesFechaFinal > 0) {
        $mensaje = 'Evento en curso';
    } else if ($diasRestantesFechaInicio < 0 && $diasRestantesFechaFinal < 0) {
        $mensaje = 'Evento finalizado';
    }

?>
<?php include 'includes/header.php'; ?> 
    <p><b>Fecha actual: </b><?= $fechaActualFormateada ?></p>
    <p><b><?= $mensaje ?></b></p>
<?php include 'includes/footer.php'; ?>