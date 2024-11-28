<?php
    function generarTablaMultiplicar($numero) {
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 extra</title>
</head>
<body>
    <h1>Tabla del <?= $num ?></h1>
    <?= generarTablaMultiplicar(5) ?>
</body>
</html>