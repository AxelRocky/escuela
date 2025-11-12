
<?php
/**
 * Clase auxiliar para cargar modelos y vistas
 */
class Controlador
{
    protected function modelo($modelo = '')
    {
        $ruta = __DIR__ . "/../modelos/" . $modelo . ".php";
        if (file_exists($ruta)) {
            require_once $ruta;
            return new $modelo();
        } else {
            throw new Exception("Modelo {$modelo} no encontrado");
        }
    }

    protected function vista($vista = '', $datos = [])
    {
        $ruta = __DIR__ . "/../vistas/" . $vista . ".php";
        if (file_exists($ruta)) {
            extract($datos);
            require_once $ruta;
        } else {
            throw new Exception("La vista {$vista} no existe");
        }
    }
}
?>


