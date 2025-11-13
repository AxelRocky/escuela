<?php
// ------------------------------------------------------------
// ARCHIVO INDEX - PUNTO DE ENTRADA DEL SISTEMA MVC
// ------------------------------------------------------------

// Mostrar errores para depuración (puedes desactivar en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definir ruta raíz absoluta del proyecto (sube un nivel desde /public)
define('RUTA_RAIZ', realpath(__DIR__ . '/../') . '/');

// Cargar archivo de inicio principal
$inicio = RUTA_RAIZ . 'app/inicio.php';
if (!file_exists($inicio)) {
    die("❌ Error: No se encontró el archivo de inicio en $inicio");
}
require_once $inicio;

// Instanciar la clase principal del sistema (router/controlador base)
if (class_exists('Control')) {
    $control = new Control();
} else {
    die("❌ Error: La clase 'Control' no está definida en app/libs/control.php");
}
?>
