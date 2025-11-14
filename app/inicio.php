<?php
/**
 * ARCHIVO DE INICIO DEL SISTEMA MVC
 */

// ------------------------------------------------------------
// 0️⃣ CARGAR COMPOSER
// ------------------------------------------------------------
$composerAutoload = __DIR__ . "/../vendor/autoload.php";
if (file_exists($composerAutoload)) {
    require_once $composerAutoload;
} else {
    die("❌ Error: No se encontró el autoload de Composer. Ejecuta: composer install");
}

// Importar Dotenv correctamente
use Dotenv\Dotenv;

// ------------------------------------------------------------
// 1️⃣ CARGAR VARIABLES DEL .env
// ------------------------------------------------------------
try {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->safeLoad(); // no falla si no existe
} catch (Throwable $e) {
    echo "⚠️ Advertencia: No se pudo cargar el archivo .env. " . $e->getMessage();
}

// ------------------------------------------------------------
// 2️⃣ LIBRERÍAS BASE DEL SISTEMA
// ------------------------------------------------------------
require_once __DIR__ . '/libs/mariadb.php';
require_once __DIR__ . '/libs/control.php';
require_once __DIR__ . '/libs/controlador.php';

// ------------------------------------------------------------
// 3️⃣ CONFIGURACIÓN GLOBAL
// ------------------------------------------------------------

// Constantes útiles (solo si no están ya definidas)
if (!defined('RUTA')) {
    define('RUTA', 'http://escuela.local/');
}

// IMPORTANTE: NO redefinir RUTA_RAIZ
// index.php ya la define

// ------------------------------------------------------------
// 4️⃣ ERRORES EN MODO DESARROLLO
// ------------------------------------------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// ------------------------------------------------------------
// FIN
// ------------------------------------------------------------
?>
