<?php
session_start();

// Credenciales de ejemplo (en un caso real estarían en una base de datos)
$email = 'empleado@empresa.com';
$password = 'password123';

// Verificar si el usuario está logueado
$logged_in = $_SESSION['logged_in'] ?? false;

// Función para iniciar sesión
function login() {
    // Regenerar ID de sesión por seguridad
    session_regenerate_id(true);
    $_SESSION['logged_in'] = true;
}

// Función para cerrar sesión
function logout() {
    // Limpiar todas las variables de sesión
    $_SESSION = [];
    
    // Obtener los parámetros de la cookie de sesión
    $params = session_get_cookie_params();
    
    // Eliminar la cookie de sesión
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], 
        $params['domain'], $params['secure'], $params['httponly']);
    
    // Destruir la sesión
    session_destroy();
}

// Función para requerir inicio de sesión
function require_login() {
    global $logged_in;
    if (!$logged_in) {
        header('Location: login.php');
        exit;
    }
}