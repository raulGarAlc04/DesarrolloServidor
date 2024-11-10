<?php
    $nombre = 'Raul';

    $saludo = 'Hola';

    if ($nombre) {
        $saludo = 'Bienvenido de nuevo, ' . $nombre;
    };

    $abono = 'Abono club';
    $coste = 40;

    for ($i = 1; $i <= 12 ; $i++) { 
        $subtotal = $coste * $i;
        $descuento = $subtotal * 0.25 ;
        $totales[$i] = $subtotal - $descuento;
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta nombre="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 15.2 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos_final.css">
</head>
<body>
    <?php require_once './includes/header_final.php'; ?>
    <p><?= $saludo ?></p>
    <h2>Descuentos de <?= $abono ?></h2>
    <table>
        <tr>
            <th>Meses</th>
            <th>Precio</th>
        </tr>
        <?php foreach ($totales as $cantidad => $precio) { ?>
            <tr>
                <td>
                    <?= $cantidad ?>
                    mes<?= ($cantidad === 1) ? '' : 'es' ?>
                </td>
                <td>
                    <?= $precio ?>€
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php require_once './includes/footer.php'; ?>
</body>
</html>