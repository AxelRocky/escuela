<?php
/**
 * ------------------------------------------------------------
 * ARCHIVO DE INICIO DEL SISTEMA MVC
 * ------------------------------------------------------------
 * Este archivo centraliza la carga de librerías, controladores,
 * modelos y configuración básica. Es el primer paso del flujo.
 * 
 * 1️⃣ Se cargan las librerías esenciales (bases, router, controlador).
 * 2️⃣ En el futuro se pueden definir rutas globales o constantes.
 * 3️⃣ También se puede agregar autoload dinámico para mayor limpieza.
 * ------------------------------------------------------------
 */

// Cargar Composer (para PHPMailer y otras librerías)
$composerAutoload = __DIR__ . "/../vendor/autoload.php";
if (file_exists($composerAutoload)) {
    require_once $composerAutoload;
}

//envolverlo con try/catch para evitar que tire un fatal error
try {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->safeLoad();
} catch (Throwable $e) {
    echo "⚠️ Advertencia: No se pudo cargar el archivo .env. " . $e->getMessage();
}


// Cargar variables del archivo .env
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->safeLoad(); // no lanza error si falta el .env

// ------------------------------------------------------------
// 1️⃣ LIBRERÍAS BASE DEL SISTEMA
// ------------------------------------------------------------

// Clase para conexión a base de datos
require_once __DIR__ . '/libs/mariadb.php';

// Clase principal que enruta peticiones (Control)
require_once __DIR__ . '/libs/control.php';

// Clase base auxiliar de todos los controladores
require_once __DIR__ . '/libs/controlador.php';

// ------------------------------------------------------------
// 2️⃣ CONFIGURACIÓN DE RUTAS Y CONSTANTES GLOBALES (FUTURO)
// ------------------------------------------------------------
// Constantes útiles
define('RUTA', 'http://escuela.local/');
define('RUTA_RAIZ', __DIR__ . '/../');


/*
define('RUTA_APP', dirname(__FILE__));              // Ruta absoluta de la aplicación
define('RUTA_URL', 'http://escuela.local');         // URL base del proyecto
*/

/*
// ------------------------------------------------------------
// 3️⃣ AUTOLOADER DE CLASES (FUTURO)
// ------------------------------------------------------------
// Este autoloader reemplazará los require_once manuales.
// PHP buscará automáticamente las clases en controladores o modelos.
// ------------------------------------------------------------
spl_autoload_register(function($class){
    if(file_exists(RUTA_APP . "/controladores/" . $class . ".php")){
        require_once RUTA_APP . "/controladores/" . $class . ".php";
    } elseif(file_exists(RUTA_APP . "/modelos/" . $class . ".php")){
        require_once RUTA_APP . "/modelos/" . $class . ".php";
    }
});
*/

// ------------------------------------------------------------
// 4️⃣ OPCIONAL: CONFIGURACIÓN DE ERRORES (DESARROLLO)
// ------------------------------------------------------------

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// ------------------------------------------------------------
// FIN DE CONFIGURACIÓN BASE
// ------------------------------------------------------------
?>
