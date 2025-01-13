<?php include 'includes/header.php'; ?>

<?php
    $enviado = $_GET['enviado'] ?? '';
    if($enviado === 'Registrar') {
        $nombre = $_GET['nombre'] ?? '';
        $apellido = $_GET['apellido'] ?? '';
        $edad = $_GET['edad'] ?? '';
        $posicion = $_GET['posicion'] ?? '';
        echo "Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . ", tu edad es " . htmlspecialchars($edad) . " y juegas en la posicion de " . htmlspecialchars($posicion) . ".";
    } else { ?>
<form action="07_registro_GET.php" method="GET">
    <p>Nombre:     <input type="text" name="nombre"></p>
    <p>Apellido:   <input type="text" name="apellido"></p>
    <p>Edad:       <input type="text" name="edad"></p>
    <p>Posicion:   <input type="text" name="posicion"></p>

    <input type="submit" name="enviado" value="Registrar">
</form>
<?php } ?>

<?php include 'includes/footer.php'; ?>