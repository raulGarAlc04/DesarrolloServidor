<?php
require 'includes/sessions.php';
require_login();
require 'includes/header-member.php';
?>

<h1>Mi Cuenta</h1>
<p>Bienvenido a tu área personal.</p>
<p>Email del empleado: <?= htmlspecialchars($email) ?></p>

<div class="employee-info">
    <h2>Información Personal</h2>
    <ul>
        <li>Departamento: Desarrollo Web</li>
        <li>Cargo: Desarrollador PHP</li>
        <li>Fecha de incorporación: 01/01/2024</li>
    </ul>
</div>

<div class="recent-activity">
    <h2>Actividad Reciente</h2>
    <ul>
        <li>Último inicio de sesión: <?= date('d/m/Y H:i:s') ?></li>
        <li>Documentos pendientes de revisión: 3</li>
        <li>Próxima reunión: Mañana 10:00</li>
    </ul>
</div>

<?php require 'includes/footer.php'; ?>