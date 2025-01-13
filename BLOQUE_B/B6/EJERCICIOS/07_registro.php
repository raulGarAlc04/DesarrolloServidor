<?php include 'includes/header.php'; ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $posicion = $_POST['posicion'];
        echo "Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido) . ", tu edad es " . htmlspecialchars($edad) . " y juegas en la posicion de " . htmlspecialchars($posicion) . ".";
    } else { ?>
<form action="07_registro.php" method="POST">
    <p>Nombre:     <input type="text" name="nombre"></p>
    <p>Apellido:   <input type="text" name="apellido"></p>
    <p>Edad:       <input type="text" name="edad"></p>
    <p>Posicion:   <input type="text" name="posicion"></p>

    <input type="submit" value="Registrar">
</form>
<?php } ?>

<?php include 'includes/footer.php'; ?>