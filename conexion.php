<?php 

include "SentSql.php";

class Conexion 
{
	public $usuario = 'root';		
	public $contrasena = "";
	public $servidor = "localhost";
	public $basededatos = "usuarios";

	public function conectar ()

	{

		return mysqli_connect($this->servidor,$this->usuario,$this->contrasena, $this->basededatos);

	}

}

?>