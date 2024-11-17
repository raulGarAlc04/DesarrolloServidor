<?php
    declare(strict_types = 1);

    $candy = [
        'Toffee' => ['price' => 3.00, 'stock' => 12],
        'Mints' => ['price' => 2.00, 'stock' => 26],
        'Fudge' => ['price' => 4.00, 'stock' => 8],
    ];

    $tax = 20;

    function get_reorder_message(int $stock): string {
        return ($stock < 10) ? 'Yes' : 'No';
    }

    function get_total_value(float $price, int $quantity): float {
        return $price * $quantity;
    }

    function get_tax_due(float $price, int $quantity, int $tax = 0): float {
        return ($price * $quantity) * ($tax / 100);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 12.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Stock Control</h2>
    <table>
        <tr>
            <th>Candy</th>
            <th>Stock</th>
            <th>Re-order</th>
            <th>Total value</th>
            <th>Tax due</th>
        </tr>
        <?php foreach ($candy as $candy_name => $candy_data) { ?>
            <tr>
                <td><?= $candy_name; ?></td>
                <td><?= $candy_data['stock']; ?></td>
                <td><?= get_reorder_message($candy_data['stock']); ?></td>
                <td>$<?= get_total_value($candy_data['price'], $candy_data['stock']); ?></td>
                <td>$<?= get_tax_due($candy_data['price'], $candy_data['stock'], $tax); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
