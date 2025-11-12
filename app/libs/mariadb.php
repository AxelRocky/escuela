<?php
class Mariadb
{
	private $host = "localhost";
	private $usuario = "axel";
	private $clave = "chupi";
	private $db = "escuela";
	private $puerto = "3306";
	private $conn;
	
	public function __construct()
	{
		try {
			$this->conn = new PDO(
				"mysql:host={$this->host};port={$this->puerto};dbname={$this->db};charset=utf8mb4",
				$this->usuario,
				$this->clave
			);
			
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Conectado"; // me servia para estar seguro de que conecto correctamente aunque no es necesario ponerlo
		} catch (PDOException $e) {
			die("❌ Error al conectar con la base de datos: " . $e->getMessage());
		}
	}

	public function getConnection() {
		return $this->conn;
	}
}
