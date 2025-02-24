<?php
require 'includes/sessions.php';
require 'includes/header-member.php';
?>

<h1>Bienvenido al Portal de Empleados</h1>

<?php if ($logged_in): ?>
    <p>Has iniciado sesión. <a href="account.php">Ver mi cuenta</a></p>
<?php else: ?>
    <p>Por favor, <a href="login.php">inicia sesión</a> para acceder a tu cuenta.</p>
<?php endif; ?>

<div class="features">
    <h2>Características del Portal</h2>
    <ul>
        <li>Acceso a información personal</li>
        <li>Gestión de documentos</li>
        <li>Calendario de reuniones</li>
        <li>Notificaciones importantes</li>
    </ul>
</div>

<?php require 'includes/footer.php'; ?>