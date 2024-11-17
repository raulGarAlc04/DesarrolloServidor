<?php
    $tax_rate = 0.4;
    $global_discount = 0.25;

    function calculate_running_total($price, $quantity) {
        global $tax_rate;
        global $global_discount;
        static $running_total = 0;
        $total = $price * $quantity;
        $tax = $total * $tax_rate;
        $discount = $total * $global_discount;
        $running_total += $total + $tax - $discount;
        return $running_total;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Running Total</th>
        </tr>
        <tr>
            <td>Mints</td>
            <td>2</td>
            <td>5</td>
            <td>$<?= calculate_running_total(2, 5); ?></td>
        </tr>
        <tr>
            <td>Toffee</td>
            <td>3</td>
            <td>5</td>
            <td>$<?= calculate_running_total(3, 5); ?></td>
        </tr>
        <tr>
            <td>Fudge</td>
            <td>5</td>
            <td>4</td>
            <td>$<?= calculate_running_total(5, 4); ?></td>
        </tr>
        <tr>
            <td>Gum</td>
            <td>1.5</td>
            <td>4</td>
            <td>$<?= calculate_running_total(1.5, 4); ?></td>
        </tr>
    </table>
</body>
</html>