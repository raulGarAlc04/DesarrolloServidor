<?php
require 'includes/sessions.php';

// Si ya está logueado, redirigir a la cuenta
if ($logged_in) {
    header('Location: account.php');
    exit;
}

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_email = $_POST['email'] ?? '';
    $user_password = $_POST['password'] ?? '';
    
    if ($user_email === $email && $user_password === $password) {
        login();
        header('Location: account.php');
        exit;
    } else {
        $error = "Email o contraseña incorrectos";
    }
}

require 'includes/header-member.php';
?>

<h1>Iniciar Sesión</h1>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="post" style="max-width: 400px;">
    <div style="margin-bottom: 15px;">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required 
               style="width: 100%; padding: 8px;">
    </div>
    
    <div style="margin-bottom: 15px;">
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required 
               style="width: 100%; padding: 8px;">
    </div>
    
    <button type="submit" 
            style="background: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">
        Iniciar Sesión
    </button>
</form>

<?php require 'includes/footer.php'; ?>