<?php
    $cadena = "Hola, este es una cadena de ejemplo de cadena";

    $primeraAparicionCadena = strpos($cadena, "cadena");
    $ultimaAparicionCadena = strrpos($cadena, "cadena");
    $subcadena = substr($cadena, 0, 5);
    $empiezaCon = str_starts_with($cadena, "Hola");
    $terminaCon = str_ends_with($cadena, "Hola");

    if ($empiezaCon) {
        $empiezaConCadena = "Sí";
    } else {
        $empiezaConCadena = "No";
    }

    if ($terminaCon) {
        $terminaConCadena = "Sí";
    } else {
        $terminaConCadena = "No";
    }
?>
<?php include_once("../includes/header.php"); ?>

    <h1>Búsqueda de palabras</h1>
    <p>Primera aparición de la cadena "cadena": <?= $primeraAparicionCadena; ?></p>
    <p>Última aparición de la cadena "cadena": <?= $ultimaAparicionCadena; ?></p>
    <p>Subcadena de la cadena: <?= $subcadena; ?></p>
    <p>Empieza con la cadena "Hola": <?= $empiezaConCadena; ?></p>
    <p>Termina con la cadena "Hola": <?= $terminaConCadena; ?></p>

<?php include_once("../includes/footer.php"); ?>