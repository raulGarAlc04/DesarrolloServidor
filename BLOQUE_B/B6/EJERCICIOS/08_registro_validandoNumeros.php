<?php
declare(strict_types=1);
require 'includes/validate.php';

$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $posicion = $_POST['posicion'];

    $valid = is_number($edad, 8, 16);

    if ($valid) {
        $mensaje = "Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . ", tu edad es " . htmlspecialchars($edad) . " y juegas en la posicion de " . htmlspecialchars($posicion) . ".";
    } else {
        $mensaje = "La edad debe ser un número entre 8 y 16.";
    }
} ?>
<?php include 'includes/header.php'; ?>
<?= $mensaje ?>
<form action="08_registro_validandoNumeros.php" method="POST">
    <p>Nombre: <input type="text" name="nombre"></p>
    <p>Apellido: <input type="text" name="apellido"></p>
    <p>Edad: <input type="text" name="edad"></p>
    <p>Posicion: <input type="text" name="posicion"></p>

    <input type="submit" value="Registrar">
</form>
<?php include 'includes/footer.php'; ?>