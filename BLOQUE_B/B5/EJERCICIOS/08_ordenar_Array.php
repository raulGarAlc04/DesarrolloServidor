<?php
$canciones = [
    'Blinding Lights - The Weeknd' => mt_rand(100, 2000),
    'Estoy enfermo - Pignoise' => mt_rand(100, 2000),
    'Levitating - Dua Lipa' => mt_rand(100, 2000),
    'One More Night - Maroon 5' => mt_rand(100, 2000),
    'Feel Good Inc. - Gorillaz' => mt_rand(100, 2000),
];

include_once '../includes/header.php'; 



echo "<h3>Canciones ordenadas por orden ascendente</h3>";
echo "<ul>";
asort($canciones); // Preserva las claves
foreach ($canciones as $cancion => $reproducciones) {
    echo "<li>$cancion -> $reproducciones reproducciones</li>";
}
echo "</ul>";

echo "<h3>Canciones ordenadas por orden descendente</h3>";
echo "<ul>";
arsort($canciones); // Preserva las claves
foreach ($canciones as $cancion => $reproducciones) {
    echo "<li>$cancion -> $reproducciones reproducciones</li>";
}
echo "</ul>";

echo "<h3>Canciones ordenadas por clave ascendente</h3>";
echo "<ul>";
ksort($canciones); // Ordena por claves
foreach ($canciones as $cancion => $reproducciones) {
    echo "<li>$cancion -> $reproducciones reproducciones</li>";
}
echo "</ul>";

echo "<h3>Canciones ordenadas por clave descendente</h3>";
echo "<ul>";
krsort($canciones); // Ordena por claves descendente
foreach ($canciones as $cancion => $reproducciones) {
    echo "<li>$cancion -> $reproducciones reproducciones</li>";
}
echo "</ul>";

echo "<h3>Canciones ordenadas por orden ascendente</h3>";
echo "<ul>";
sort($canciones);
foreach ($canciones as $cancion => $reproducciones) {
    echo "<li>$cancion -> $reproducciones reproducciones</li>";
}
echo "</ul>";

echo "<h3>Canciones ordenadas por orden descendente</h3>";
echo "<ul>";
rsort($canciones); // Preserva las claves
foreach ($canciones as $cancion => $reproducciones) {
    echo "<li>$cancion -> $reproducciones reproducciones</li>";
}
echo "</ul>";

include_once '../includes/footer.php'; 
?>
