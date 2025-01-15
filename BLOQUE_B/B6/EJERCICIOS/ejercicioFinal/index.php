<?php
$user   = ['nombreCompleto' => '', 'correo' => '', 'telefono' => '', 'tipoEvento' => '', 'terminos' => ''];
$errors = ['nombreCompleto' => '', 'correo' => '', 'telefono' => '', 'tipoEvento' => '', 'terminos' => ''];
$mensaje = 'Por favor rellene el siguiente formulario:';
$mensajeErrorOpciones = '';
$evento = '';
$tipoEventos = ['Presencial', 'Online'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validation_filters['nombreCompleto']['filter']            = FILTER_VALIDATE_REGEXP;
    $validation_filters['nombreCompleto']['options']['regexp'] = '/^[A-z ]{2,50}$/';
    $validation_filters['correo']['filter']                    = FILTER_VALIDATE_EMAIL;
    $validation_filters['telefono']['filter']                  = FILTER_VALIDATE_REGEXP;
    $validation_filters['telefono']['options']['regexp']       = '/^[0-9]{9,}$/';
    $validation_filters['tipoEvento']['filter']                = FILTER_SANITIZE_FULL_SPECIAL_CHARS;
    $validation_filters['terminos']                            = FILTER_VALIDATE_BOOLEAN;
    
    $user = filter_input_array(INPUT_POST, $validation_filters);
    
    if (in_array($user['tipoEvento'], $tipoEventos)) {
        $evento = $user['tipoEvento'];
        $errors['tipoEvento'] = '';
    } else {
        $evento = '';
        $errors['tipoEvento'] = 'Debes seleccionar una opcion';
    }

    $errors['nombreCompleto'] = $user['nombreCompleto'] ? '' : 'El nombre debe contener entre 2 y 50 caracteres';
    $errors['correo']         = $user['correo'] ? '' : 'El correo debe tener un formato válido aaaa@aaaa.aaa';
    $errors['telefono']       = $user['telefono'] ? '' : 'El número de teléfono solo puede contener números y al menos 9 caracteres';
    $errors['terminos']       = $user['terminos'] ? '' : 'Debes aceptar los términos y condiciones';
    $invalido = implode($errors);

    if ($invalido) {
        $mensaje = 'Por favor corrige los errores mostrados';
    } else {
        $mensaje = 'Gracias por registrarte';
    }

    $user['nombreCompleto'] = filter_var($user['nombreCompleto'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $user['correo']         = filter_var($user['correo'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
?>

<?php include '../includes/header_final.php'; ?>
<h1>Gestión de eventos</h1>
<?= $mensaje ?>
<form action="index.php" method="POST">
    Nombre completo: <input type="text" name="nombreCompleto" value="<?= $user['nombreCompleto'] ?>">
    <span class="error"><?= $errors['nombreCompleto'] ?></span><br>
    Correo electrónico: <input type="text" name="correo" value="<?= $user['correo'] ?>">
    <span class="error"><?= $errors['correo'] ?></span><br>
    Número de teléfono: <input type="text" name="telefono" value="<?= $user['telefono'] ?>">
    <span class="error"><?= $errors['telefono'] ?></span><br>
    Tipo de evento:
    <?php foreach ($tipoEventos as $opcion) { ?>
        <?= $opcion ?> <input type="radio" name="tipoEvento" value="<?= $opcion ?>"
            <?= $evento == $opcion ? 'checked' : '' ?>>
    <?php } ?>
    <!--<span class="error"><?php //$mensajeErrorOpciones ?></span><br>-->
    <span class="error"><?= $errors['tipoEvento'] ?></span><br>
    <input type="checkbox" name="terminos" value="true"
        <?= $user['terminos'] ? 'checked' : '' ?>> Acepto los términos y condiciones
    <span class="error"><?= $errors['terminos'] ?></span><br>
    <input type="submit" value="Save">
</form>
<?php include '../includes/footer.php'; ?>