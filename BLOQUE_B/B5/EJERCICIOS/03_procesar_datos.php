<?php
    $nombre = "Juan";
    $correo = "juan@gmail.com";
    $mensaje = "Hola, este es un mensaje urgente de prueba perro";

    echo "Nombre: $nombre\n";
    echo "Correo: $correo\n";
    echo "Mensaje: $mensaje\n";

    // eliminar espacios en blanco al inicio y final de cadena
    $nombre = trim($nombre);
    $correo = trim($correo);
    $mensaje = trim($mensaje);

    $correo = strtolower($correo);
    $mensaje = str_replace("perro", "*****", $mensaje);

    $mensaje = str_ireplace("urgente", "Prioridad Alta", $mensaje);

    $mensaje .= str_repeat("!", 3);
?>
<?php include_once("../includes/header.php"); ?>

    <h1>Procesar datos</h1>
    <p>Nombre: <?= $nombre; ?></p>
    <p>Correo: <?= $correo; ?></p>
    <p>Mensaje: <?= $mensaje; ?></p>

<?php include_once("../includes/footer.php"); ?>