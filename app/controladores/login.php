<?php

class Login extends Controlador
{
    private $modelo;

    function __construct()
    {
        // Carga el modelo correspondiente (LoginModelo)
        $this->modelo = $this->modelo("LoginModelo");
    }

    // Muestra la vista del formulario de login
    public function caratula()
    {
        $this->vista("login/caratula");
    }

    // Procesa el formulario enviado por POST
    public function autenticar()
    {
        // Verificamos si se enviaron datos
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Sanitizamos los datos recibidos
            $usuario = htmlspecialchars($_POST['usuario'] ?? '');
            $clave   = htmlspecialchars($_POST['clave'] ?? '');

            if ($usuario && $clave) {
                // Por ahora solo mostramos lo que se envió
                echo "Usuario recibido: {$usuario}<br>";
                echo "Contraseña recibida: {$clave}<br>";

                // 🟢 Futuro: aquí puedes llamar al modelo para validar el usuario
                // $resultado = $this->modelo->validarUsuario($usuario, $clave);
                // if ($resultado) { ... }

            } else {
                echo "⚠️ Debes llenar ambos campos.";
            }
        } else {
            echo "Método de acceso no permitido.";
        }
    }
}
?>

