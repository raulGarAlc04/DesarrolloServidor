<?php
    // Función modificada para incluir impuestos
    function calculate_cost($cost, $quantity, $discount = 0, $tax = 0) {
        $cost = $cost * $quantity;
        $total_cost = $cost - $discount;
        $total_cost += $total_cost * $tax; // Aplica impuestos si se proporcionan
        return $total_cost;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 10.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store - Costos Modificados</h1>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Costo Unitario</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Impuesto</th>
            <th>Costo Total</th>
        </tr>
        <tr>
            <td>Dark Chocolate</td>
            <td>$5</td>
            <td>10</td>
            <td>$5</td>
            <td>10%</td>
            <td>$<?= calculate_cost(5, 10, 5, 0.10); ?></td>
        </tr>
        <tr>
            <td>Milk Chocolate</td>
            <td>$3</td>
            <td>4</td>
            <td>$0</td>
            <td>5%</td>
            <td>$<?= calculate_cost(3, 4, 0, 0.05); ?></td>
        </tr>
        <tr>
            <td>White Chocolate</td>
            <td>$4</td>
            <td>15</td>
            <td>$20</td>
            <td>15%</td>
            <td>$<?= calculate_cost(4, 15, 20, 0.15); ?></td>
        </tr>
        <tr>
            <td>Mint Chocolate</td>
            <td>$2</td>
            <td>20</td>
            <td>$0</td>
            <td>0%</td>
            <td>$<?= calculate_cost(2, 20); ?></td>
        </tr>
        <tr>
            <td>Pure Chocolate</td>
            <td>$6</td>
            <td>5</td>
            <td>$10</td>
            <td>20%</td>
            <td>$<?= calculate_cost(6, 5, 10, 0.20); ?></td>
        </tr>
    </table>
</body>
</html>
