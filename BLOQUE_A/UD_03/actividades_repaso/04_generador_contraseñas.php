<?php
    function generarContrasenas($longitud = 8) {
        static $contadorTotal = 0; // Contador estático para el total de contraseñas generadas
        $numeroContrasenas = rand(1, 10); // Genera un número aleatorio de contraseñas (entre 1 y 10)
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $listaContrasenas = [];
    
        for ($j = 0; $j < $numeroContrasenas; $j++) {
            $contrasena = '';
            for ($i = 0; $i < $longitud; $i++) {
                $contrasena .= $caracteres[rand(0, strlen($caracteres) - 1)];
            }
            $listaContrasenas[] = $contrasena; // Agrega la contraseña a la lista
            $contadorTotal++; // Incrementa el contador total
        }
    
        echo "Número de contraseñas generadas en esta ejecución: $numeroContrasenas\n";
        echo "Contraseñas generadas:\n";
        for ($k = 0; $k < count($listaContrasenas); $k++) {
            echo "- " . $listaContrasenas[$k] . "\n";
        }
        echo "Total de contraseñas generadas hasta ahora: $contadorTotal\n";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04 extra</title>
</head>
<body>
    <h1>Generar contraseña</h1>
    <?= generarContrasenas(); ?>
    <br>
    <hr>
    <h1>Generar contraseña. 6 caracteres</h1>
    <?= generarContrasenas(6); ?>
</body>
</html>