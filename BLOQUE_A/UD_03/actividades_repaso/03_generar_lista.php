<?php
    function generarLista($items, $tipo = 'ul') {
        $lista = "<$tipo>\n";
        foreach ($items as $item) {
            $lista .= "  <li>$item</li>\n";
        }
        $lista .= "</$tipo>";
        return $lista;
    }

    $elementos = ['Manzana', 'Banana', 'Cereza'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03 extra</title>
</head>
<body>
    <h1>Lista desordenada</h1>
    <?= generarLista($elementos); ?>
    <br>
    <hr>
    <h1>Lista ordenada</h1>
    <?= generarLista($elementos, 'ol'); ?>
</body>
</html>