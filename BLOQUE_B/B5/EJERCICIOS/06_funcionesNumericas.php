<?php
    $hamburguesas = [
        'Hamburguesa clasica' => 5.50,
        'Hamburguesa con queso' => 6.75,
        'Hamburguesa BBQ' => 7.25,
        'Hamburguesa vegetariana' => 6.00,
    ];

    $ventasDelDia = mt_rand(50,100);

    $ventas = [];
    $totalDelDia = 0;

    for ($i = 0; $i < $ventasDelDia; $i++) {
        $hamburguesaAleatoria = array_rand($hamburguesas);
        $cantidad = mt_rand(1, 5);
        $totalVenta = round($hamburguesas[$hamburguesaAleatoria] * $cantidad, 2);
        $ventas[] = [
            'hamburguesa' => $hamburguesaAleatoria,
            'cantidad' => $cantidad,
            'total' => $totalVenta
        ];
        $totalDelDia += $totalVenta;
    }
?>
<?php include_once '../includes/header.php'; ?>

    <h3>Ventas del dia de hoy: <?= $ventasDelDia ?></h3>
    <ul>
        <?php foreach ($ventas as $venta) { ?>
            <li><?= $venta['hamburguesa'] ?> x <?= $venta['cantidad'] ?> = <?= $venta['total'] ?>€</li>
        <?php } ?>
    </ul>

    <h3>Total de ventas del dia: <?= number_format($totalDelDia, 2) ?>€</h3>

    <h3>Estadísticas</h3>
    <ul>
        <li>Raiz cuadrada del total: <?= number_format(sqrt($totalDelDia), 4) ?>€</li>
        <li>Total elevado a 2: <?= pow($totalDelDia, 2) ?>€</li>
        <li>Redondeo hacia arriba: <?= ceil($totalDelDia) ?>€</li>
        <li>Redondeo hacia abajo: <?= floor($totalDelDia) ?>€</li>
    </ul>

<?php include_once '../includes/footer.php'; ?>