<?php
    // Función para obtener el mensaje de stock
    function get_stock_message($stock) {
        if ($stock == 10) {
            return 'Exactly 10 items in stock';
        }
        if ($stock >= 10) {
            return 'Good availability';
        }
        if ($stock > 0 && $stock < 10) {
            return 'Low availability';
        }
        return 'Out of stock';
    }

    // Definición de productos y su stock
    $products = [
        ['name' => 'Chocolates', 'stock' => 25],
        ['name' => 'Caramelos', 'stock' => 10],
        ['name' => 'Galletas', 'stock' => 5],
        ['name' => 'Dulces', 'stock' => 0],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 9.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Mensajes de Stock</h2>
    <table>
        <tr>
            <th>Producto</th>
            <th>Stock</th>
            <th>Mensaje de Stock</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product['name']; ?></td>
                <td><?= $product['stock']; ?></td>
                <td><?= get_stock_message($product['stock']); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
