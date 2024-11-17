<?php
    // Función modificada para incluir impuestos y costo de envío
    function calculate_cost($cost, $quantity, $discount = 0, $tax = 20, $shipping = 0) {
        $cost = $cost * $quantity;
        $tax = $cost * ($tax / 100);
        $total_cost = ($cost + $tax) - $discount;
        $total_cost += $shipping; // Agregar costo de envío
        return $total_cost;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 11.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store - Costos Modificados con Envío</h1>
    <table border="1">
        <tr>
            <th>Producto</th>
            <th>Costo Unitario</th>
            <th>Cantidad</th>
            <th>Descuento</th>
            <th>Impuesto</th>
            <th>Envío</th>
            <th>Costo Total</th>
        </tr>
        <tr>
            <td>Dark Chocolate 1</td>
            <td>$5</td>
            <td>10</td>
            <td>$5</td>
            <td>10%</td>
            <td>$10</td>
            <td>$<?= calculate_cost(5, 10, 5, 10, 10); ?></td>
        </tr>
        <tr>
            <td>Dark Chocolate 2</td>
            <td>$3</td>
            <td>4</td>
            <td>$0</td>
            <td>5%</td>
            <td>$5</td>
            <td>$<?= calculate_cost(3, 4, 0, 5, 5); ?></td>
        </tr>
        <tr>
            <td>Dark Chocolate 3</td>
            <td>$4</td>
            <td>15</td>
            <td>$20</td>
            <td>15%</td>
            <td>$15</td>
            <td>$<?= calculate_cost(4, 15, 20, 15, 15); ?></td>
        </tr>
        <tr>
            <td>Dark Chocolate 4</td>
            <td>$2</td>
            <td>20</td>
            <td>$0</td>
            <td>0%</td>
            <td>$0</td>
            <td>$<?= calculate_cost(2, 20, 0, 0, 0); ?></td>
        </tr>
        <tr>
            <td>Dark Chocolate 5</td>
            <td>$6</td>
            <td>5</td>
            <td>$10</td>
            <td>20%</td>
            <td>$20</td>
            <td>$<?= calculate_cost(6, 5, 10, 20, 20); ?></td>
        </tr>
    </table>
</body>
</html>
