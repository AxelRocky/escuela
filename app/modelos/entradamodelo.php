<?php
/**
 * Modelo de gestión de acceso y recuperación de contraseñas
 */
class EntradaModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Mariadb();
    }

    /**
     * Verifica si un correo existe en la base de datos
     */
    public function validarCorreo($correo = '')
    {
        if (empty($correo)) return false;

        // Evita inyección SQL
        $correoSeguro = $this->db->real_escape_string($correo);

        $sql = "SELECT * FROM usuarios WHERE correo = '$correoSeguro' LIMIT 1";
        return $this->db->query($sql);
    }

    /**
     * Envía un correo de recuperación de contraseña
     */
    public function enviarCorreo($email = '')
    {
        if (empty($email)) return false;

        // (por ahora simulado)
        $data = ["id" => 1]; // futuro: $this->validarCorreo($email);

        if (!empty($data)) {
            $id = $data["id"];

            $msg = "
                <p>Hola,</p>
                <p>Has solicitado restablecer tu clave de acceso.</p>
                <p>Haz clic en el siguiente enlace para cambiar tu contraseña:</p>
                <p><a href='" . RUTA . "login/cambiarclave/$id'>Cambiar clave</a></p>
                <br>
                <p>Si no solicitaste este cambio, puedes ignorar este mensaje.</p>
            ";

            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type:text/html; charset=UTF-8\r\n";
            $headers .= "From: Control Escolar <no-reply@escuela.com>\r\n";
            $headers .= "Reply-to: ayuda@escuela.com\r\n";

            $asunto = "Recuperación de acceso - Sistema Escolar";

            // Por ahora simulamos éxito
            // En entorno real: return @mail($email, $asunto, $msg, $headers);
            return true;
        }

        return false;
    }
}
?>

