<?php 

class LoginModelo
{
    private $db = "";

    function __construct()
        {
            $this->db =new  Mariadb();
        }
    /* para futuros avances
    public function validarUsuario($usuario, $clave)
{
    // Lógica SQL aquí
}
    */
}


?>