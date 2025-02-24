<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('name', htmlspecialchars($_POST['name']));
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
$name = $_COOKIE['name'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida Personalizada</title>
</head>
<body>
    <?php if ($name): ?>
        <h1>Bienvenido de nuevo, <?= htmlspecialchars($name) ?></h1>
    <?php else: ?>
        <h1>Bienvenido, nuevo usuario</h1>
        <form method="post">
            <label for="name">Por favor, introduce tu nombre:</label><br>
            <input type="text" id="name" name="name" required><br>
            <button type="submit">Guardar</button>
        </form>
    <?php endif; ?>
</body>
</html>