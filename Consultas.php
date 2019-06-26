<?php 

include "conexion.php";

class 	Consultas extends SentSql
{


	function seleccionar_empresa ($table, $tblcabecera)

	{
		$cnx = conexion::conectar();

		if ($cnx === false) {

			die("ERROR: No  se puede hacer la conexion a la base de datos.". mysqli_connect_error());

		}

		if ($result = mysqli_query($cnx,$this->selectTodasEmpresas.$this->basededatos.".".$table))

		{
			echo $tblcabecera;

			while ( row === mysqli_fetch_row($result)) 

			{

				echo "<tr>";

				foreach ($row as $key => $value) {

					echo "<td class = 'fila'>".$value."</td>";

				}

				echo "</tr>";

			}

			echo "</table>";

		}

		mysqli_close($cnx);
		
	}

	function seleccionar_una_empresa($table, $idp)

	{

		$cnx = conexion::conectar();

		if($cnx === false)
			
		{

			die("ERROR: No  se puede hacer la conexion a la base de datos.". mysqli_connect_error());

		}

		if($result = mysqli_query($cnx, "SELECT * FROM $table WHERE idpersona = $idp"))

		{

			return mysqli_fetch_row($result);

		}

		mysqli_close($cnx);

	}

	function insertar_persona($table, $camposI, $valoresI)

	{

		$cnx = connexion::conectar();

		if ($cnx === false)

				{

					die("ERROR: No  se puede hacer la conexion a la base de datos.". mysqli_connect_error());
					
				}		
		
		$insertarRegistroPersona = 	"INSERT INTO $table($camposI) VALUES ($valoresI)";

		$insertarRegistroPersona;

		mysqli_query($cnx,$insertarRegistroPersona);

		mysqli_close($cnx);

	}

	function actualizar_persona($table,$valoresI,$idp)
	{

		if ($cnx === false)

		{

			die("ERROR: No  se puede hacer la conexion a la base de datos.". mysqli_connect_error());
			
		}	

		$actualizarRegistroPersona = "update $table SET $valoresI WHERE idpersona = $id ";

		$actualizarRegistroPersona;

		mysqli_query($cnx, $actualizarRegistroPersona);

		mysqli_close($cnx);
		
	}


}

?>