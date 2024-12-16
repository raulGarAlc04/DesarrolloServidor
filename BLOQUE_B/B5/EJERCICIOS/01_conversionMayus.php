<?php
$cadenaOriginal = "Hola, este es un ejemplo de cadena";

$cadenaMayusculas = strtoupper($cadenaOriginal);
$cadenaPrimerasMayus = ucwords($cadenaOriginal);
$longitudCadena = strlen($cadenaOriginal);
$numeroPalabras = str_word_count($cadenaOriginal);
$quitarEspacios = str_replace(" ", "", $cadenaOriginal);
$longitudSinEspacios = strlen($quitarEspacios);
?>
<?php include_once("../includes/header.php"); ?>

    <h1>Conversion de cadenas</h1>
    <p>Cadena original: <?= $cadenaOriginal; ?></p>
    <p>Cadena mayúsculas: <?= $cadenaMayusculas; ?></p>
    <p>Cadena primeras mayúsculas: <?= $cadenaPrimerasMayus; ?></p>
    <p>Longitud cadena: <?= $longitudCadena; ?></p>
    <p>Longitud sin espacios: <?= $longitudSinEspacios; ?></p>
    <p>Número de palabras: <?= $numeroPalabras; ?></p>
    <h2>Análisis Adicional:</h2>
    <p>
        <?php
        $frecuencia_palabras = array_count_values(str_word_count(strtolower($cadenaOriginal), 1));
        ?>
    <p>Frecuencia de cada palabra</p>
        <ul>
            <?php foreach ($frecuencia_palabras as $palabra => $count) { ?>
                <li><?= htmlspecialchars($palabra) ?>: <?= $count ?></li>
            <?php } ?>
        </ul>
    </p>
<?php include_once("../includes/footer.php"); ?>