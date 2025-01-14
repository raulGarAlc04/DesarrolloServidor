<?php
declare(strict_types = 1);                                    // Enable strict tpes
require 'includes/validate.php';

$form = filter_input_array(INPUT_POST);

$user = [
    'email'  => '',
    'edad'   => '',
    'terminos' => '',
];                                                            // Initialize $user array

$errors = [
    'email'  => '',
    'edad'   => '',
    'terminos' => '',
];                                                            // Initialize errors array
$mensaje = '';                                                // Initialize mensaje

if ($_SERVER['REQUEST_METHOD'] == 'POST') {                   // If form submitted
    $user['email']  = $_POST['email'];                          // Get email
    $user['edad']   = $_POST['edad'];                           // Get edad then check T&Cs
    $user['terminos'] = (isset($_POST['terminos']) and $_POST['terminos'] == true) ? true : false;

    $errors['email']  = is_email($user['email'])   ? '' : 'Debe tener la estructura de un email';
    $errors['edad']   = is_number($user['edad'], 18, 100) ? '' : 'Debes ser mayor de 18 años';
    $errors['terminos'] = $user['terminos']                  ? '' : 'Debes aceptar los terminos y condiciones';                                      // Validate data

    $invalid = implode($errors);                              // Join error mensajes
    if ($invalid) {                                           // If there are errors
        $mensaje = 'Por favor corrige los siguientes errores';    // Do not process
    } else {                                                  // Otherwise
        $mensaje = 'Datos correctos';                     // Can process data
    }
}
?>
<?php include 'includes/header.php'; ?>

<?= $mensaje ?>
<form action="12_newsletter_filtro.php" method="POST">
  Email: <input type="text" name="email" value="<?= htmlspecialchars($user['email']) ?>">
  <span class="error"><?= $errors['email'] ?></span><br>
  Edad:  <input type="text" name="edad" value="<?= htmlspecialchars($user['edad']) ?>">
  <span class="error"><?= $errors['edad'] ?></span><br>
  <input type="checkbox" name="terminos" value="true" <?= $user['terminos'] ? 'checked' : '' ?>>
  Acepto los terminos y condiciones
  <span class="error"><?= $errors['terminos'] ?></span><br>
  <input type="submit" value="Save">
</form>
<pre><?php var_dump($form); ?></pre>

<?php include 'includes/footer.php'; ?>