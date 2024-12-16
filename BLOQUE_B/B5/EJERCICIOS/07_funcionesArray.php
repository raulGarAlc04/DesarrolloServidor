<?php
    $canciones = [
        'Blinding Lights',
        'Estoy enfermo',
        'Levitating',
        'One More Night',
        'Feel Good Inc.',
    ];

    $canciones2 = [
        'Despacito',
        'Donde estás yo',
        'Lo mejor de ti',
        'No te vayas',
        'La vida es un sueño',
    ];

    $cancionesText = implode(', ', $canciones);
?>
<?php include_once '../includes/header.php'; ?>

    <h3>Agregar canciones</h3>
    <p>Añadiendo al principio de la lista de canciones: La vida es un sueño</p>
    <?php array_unshift($canciones, 'La vida es un sueño'); ?>
    <ul>
        <?php foreach ($canciones as $cancion) { ?>
            <li><?= $cancion ?></li>
        <?php } ?>
    </ul>
    <p>Añadiendo al final de la lista de canciones: Broken Microphone</p>
    <?php array_push($canciones, 'Broken Microphone'); ?>
    <ul>
        <?php foreach ($canciones as $cancion) { ?>
            <li><?= $cancion ?></li>
        <?php } ?>
    </ul>

    <h3>Eliminar canciones</h3>
    <p>Eliminando la primera canción de la lista</p>
    <?php array_shift($canciones); ?>
    <ul>
        <?php foreach ($canciones as $cancion) { ?>
            <li><?= $cancion ?></li>
        <?php } ?>
    </ul>
    <p>Eliminando la última canción de la lista</p>
    <?php array_pop($canciones); ?>
    <ul>
        <?php foreach ($canciones as $cancion) { ?>
            <li><?= $cancion ?></li>
        <?php } ?>
    </ul>

    <h3>Comprobar si hay una cancion en la lista</h3>
    <p>Comprobando si la cancion 'Levitating' está en la lista</p>
    <?php if (in_array('Levitating', $canciones)) { ?>
        <p>La canción 'Levitating' está en la lista</p>
    <?php } else { ?>
        <p>La canción 'Levitating' no está en la lista</p>    
    <?php } ?>

    <h3>Cuantas canciones hay en la lista</h3>
    <p>Cuantas canciones hay en la lista: <?= count($canciones) ?></p>

    <h3>Canción aleatoria</h3>
    <p>La canción aleatoria es: <?= $canciones[array_rand($canciones)] ?></p>

    <h3>Mostrar lista de reproduccion</h3>
    <p><?= $cancionesText ?></p>

    <h3>Dividir la Cadena en canciones</h3>
    <p>Dividiendo la cadena en canciones</p>
    <?php $canciones = explode(', ', $cancionesText); ?>
    <ul>
        <?php foreach ($canciones as $cancion) { ?>
            <li><?= $cancion ?></li>
        <?php } ?>
    </ul>

    <h3>Eliminar las canciones duplicadas</h3>
    <p>Eliminando las canciones duplicadas</p>
    <?php $canciones = array_unique($canciones); ?>
    <ul>
        <?php foreach ($canciones as $cancion) { ?>
            <li><?= $cancion ?></li>
        <?php } ?>
    </ul>


<?php include_once '../includes/footer.php'; ?>