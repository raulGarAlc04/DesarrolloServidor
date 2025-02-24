<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Preferences</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        select {
            padding: 5px;
            width: 200px;
        }
        button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .message {
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
        }
        .success {
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
        }
    </style>
</head>
<body>
    <?php
    $messages = [
        'en' => 'Welcome to our website!',
        'es' => '¡Bienvenido a nuestro sitio web!'
    ];

    // Procesar el formulario cuando se envía
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selected_language = $_POST['language'];

        // Validar que el idioma seleccionado es válido
        if (array_key_exists($selected_language, $messages)) {
            // Establecer la cookie con una duración de 30 días
            setcookie('preferred_language', $selected_language, time() + (30 * 24 * 60 * 60), '/');

            // Actualizar el idioma actual para esta petición
            $current_language = $selected_language;
        }
    }

    // Obtener el idioma preferido de la cookie si existe
    $current_language = $_COOKIE['preferred_language'] ?? 'en';
    ?>

    <?php if (isset($_COOKIE['preferred_language'])): ?>
        <div class="message success">
            <?php echo htmlspecialchars($messages[$current_language]); ?>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <div class="form-group">
            <label for="language">Select your preferred language:</label><br>
            <select name="language" id="language">
                <option value="en" <?php echo $current_language === 'en' ? 'selected' : ''; ?>>English</option>
                <option value="es" <?php echo $current_language === 'es' ? 'selected' : ''; ?>>Español</option>
            </select>
        </div>
        <button type="submit">Save Preference</button>
    </form>

    <?php if (isset($_COOKIE['preferred_language'])): ?>
        <p>Your current language preference is:
            <?php echo $current_language === 'en' ? 'English' : 'Español'; ?>
        </p>
    <?php endif; ?>
</body>
</html>