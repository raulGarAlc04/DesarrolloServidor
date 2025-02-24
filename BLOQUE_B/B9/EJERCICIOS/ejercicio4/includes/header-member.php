<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Empleados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        .nav-bar {
            background: #333;
            padding: 15px;
            margin-bottom: 20px;
        }
        .nav-bar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <a href="index.php">Inicio</a>
        <a href="account.php">Mi Cuenta</a>
        <?php if ($logged_in): ?>
            <a href="logout.php">Cerrar Sesión</a>
        <?php else: ?>
            <a href="login.php">Iniciar Sesión</a>
        <?php endif; ?>
    </div>
    <div class="container">