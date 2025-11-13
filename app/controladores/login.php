<?php
class Login extends Controlador
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = $this->modelo("EntradaModelo");
    }

    public function caratula()
    {
        $datos = [
            "titulo" => "Login de usuario",
            "subtitulo" => "Bienvenido al Sistema Escolar"
        ];
        $this->vista("login/caratula", $datos);
    }

    public function olvido()
    {
        $errores = [];
        $mensaje = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $correo = trim($_POST["usuario"]);

            if (empty($correo)) {
                $errores[] = "Debes escribir tu correo electrónico.";
            } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $errores[] = "El correo electrónico no tiene un formato válido.";
            } else {
                $usuario = $this->modelo->validarCorreo($correo);
                if (!$usuario || count($usuario) == 0) {
                    $errores[] = "El correo no está registrado.";
                }
            }

            if (empty($errores)) {
                $enviado = $this->modelo->enviarCorreo($correo);
                if ($enviado) {
                    $mensaje = "✅ Correo enviado correctamente a <strong>$correo</strong>.";
                } else {
                    $errores[] = "❌ No se pudo enviar el correo.";
                }
            }
        }

        $datos = [
            "titulo" => "Recuperar acceso",
            "subtitulo" => "Olvidé mi contraseña",
            "errores" => $errores,
            "mensaje" => $mensaje
        ];

        $this->vista("login/mensaje", $datos);
    }
}
?>
