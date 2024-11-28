<?php
    function calcularArea($dimension1, $dimension2 = null, $figura = 'cuadrado') {
        if ($figura == 'cuadrado') {
            return $dimension1 * $dimension1; // Área de un cuadrado
        } elseif ($figura == 'rectangulo') {
            return $dimension1 * $dimension2; // Área de un rectángulo
        } elseif ($figura == 'triangulo') {
            return ($dimension1 * $dimension2) / 2; // Área de un triángulo
        } elseif ($figura == 'circulo') {
            return pi() * $dimension1 * $dimension1; // Área de un círculo
        } else {
            return "Figura no soportada"; // Caso de error
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02 extra</title>
</head>
<body>
    <h1>Areas de figuras</h1>
    <p>Area del cuadrado: <?= calcularArea(5); ?></p>
    <p>Area del rectangulo: <?= calcularArea(5, 10, 'rectangulo'); ?></p>
    <p>Area del triangulo: <?= calcularArea(5, 10, 'triangulo'); ?></p>
    <p>Area del circulo: <?= calcularArea(5, null, 'circulo'); ?></p>
</body>
</html>