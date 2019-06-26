<?php 


class 	SentSql extends Conexion
{
	public $camposI = 0;
	public $valuesI = 0;
	public $tablaI = "";
	public $value = "VALUES";
	public $selectTodasEmpresas = "SELECT * FROM ";

	public function conectar ()

	{

		return mysqli_connect($this->servidor,$this->usuario,$this->contrasena, $this->basededatos);
		
	}

}

?>