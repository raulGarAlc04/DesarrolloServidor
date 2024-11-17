<?php
declare(strict_types=1);

$books = [
    'Principìto' => ['titulo' => 'El principito', 'precio' => 10.00, 'stock' => 20],
    'Platero' => ['titulo' => 'Platero y yo', 'precio' => 12.00, 'stock' => 12],
    'Lazarillo' => ['titulo' => 'El lazarillo de Tormes', 'precio' => 15.00, 'stock' => 5],
];

$tax_rate = 12;

function get_total_stock(array $books): int {
    $total_stock = 0;
    foreach ($books as $book) {
        $total_stock += $book['stock'];
    }
    return $total_stock;
}

function get_inventory_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function calculate_tax(float $inventory_value, int $tax = 0): float {
    $tax_amount = $inventory_value * ($tax / 100);
    return $inventory_value + $tax_amount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 13.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Stock Control</h2>
    <table>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Inventory value</th>
            <th>Tax due</th>
        </tr>
        <?php foreach ($books as $book_name => $book_data) {
            // Calcular el valor del inventario para el libro actual
            $inventory_value = get_inventory_value($book_data['precio'], $book_data['stock']);
            // Calcular el impuesto sobre el valor del inventario
            $total_with_tax = calculate_tax($inventory_value, $tax_rate);
        ?>
            <tr>
                <td><?= $book_name; ?></td>
                <td>$<?= number_format($book_data['precio'], 2); ?></td>
                <td><?= $book_data['stock']; ?></td>
                <td>$<?= number_format($inventory_value, 2); ?></td>
                <td>$<?= number_format($total_with_tax, 2); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
