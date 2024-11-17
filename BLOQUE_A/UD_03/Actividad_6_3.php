
<?php
    $us_price = 4;
    $rates = [
        'uk' => 0.81,
        'eu' => 0.93,
        'jp' => 113.21,
        'aud' => 1.30,
        'cad' => 1.25,
    ];

    // Función para calcular precios en diferentes monedas
    function calculate_prices($usd, $exchange_rates) {
        $prices = [
            'pound' => $usd * $exchange_rates['uk'],
            'euro' => $usd * $exchange_rates['eu'],
            'yen' => $usd * $exchange_rates['jp'],
            'aud' => $usd * $exchange_rates['aud'],
            'cad' => $usd * $exchange_rates['cad'],
        ];
        return $prices;
    }

    // Función para formatear precios con dos decimales y el símbolo de la moneda
    function format_price($cantidad, $moneda) {
        switch ($moneda) {
            case 'pound':
                return '&pound;' . number_format($cantidad, 2);
            case 'euro':
                return '&euro;' . number_format($cantidad, 2);
            case 'yen':
                return '&yen;' . number_format($cantidad, 2);
            case 'aud':
                return 'A$' . number_format($cantidad, 2);
            case 'cad':
                return 'C$' . number_format($cantidad, 2);
            default:
                return '$' . number_format($cantidad, 2);
        }
    }

    // Calcular precios globales
    $global_prices = calculate_prices($us_price, $rates);

    // Productos adicionales
    $products = [
        ['name' => 'Chocolates', 'usd_price' => 4],
        ['name' => 'Caramelos', 'usd_price' => 3],
        ['name' => 'Galletas', 'usd_price' => 5],
        ['name' => 'Dulces', 'usd_price' => 2],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 6.3 Bloque A Raúl García</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Lista de Productos</h2>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio (USD)</th>
            <th>Precio (GBP)</th>
            <th>Precio (EUR)</th>
            <th>Precio (JPY)</th>
            <th>Precio (AUD)</th>
            <th>Precio (CAD)</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <?php
                $prices = calculate_prices($product['usd_price'], $rates);
            ?>
            <tr>
                <td><?= $product['name']; ?></td>
                <td><?= format_price($product['usd_price'], 'usd'); ?></td>
                <td><?= format_price($prices['pound'], 'pound'); ?></td>
                <td><?= format_price($prices['euro'], 'euro'); ?></td>
                <td><?= format_price($prices['yen'], 'yen'); ?></td>
                <td><?= format_price($prices['aud'], 'aud'); ?></td>
                <td><?= format_price($prices['cad'], 'cad'); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
