<?php include "conexion.php" ?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Proyecto de Clase</title>
  </head>

  <body>

		<nav class = "navbar navbar-expand-lg navbar-light bg-light" >

			<a href="#" class = "navbar-brand" >SEMESTRE 5</a>

			<button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#dataSupportedContent" aria-controls = "navbarSupportedContent" aria-expanded = "false" aria-label = "Toggle navigation">

				<span class = "navbar-toggler-icon"></span>

			</button>

			<!-- 3 listas desordenadas -->
			<div class="collapse navbar-collapse" id = "navbarSupportedContent" >

				<ul class = "navbar-nav mr-auto">

					<li class="nav-item active">

					<a class="nav-link" href="insertar.php" data-toggle = "modal" data-target = "#modalguardar" >   Insertar <span class="sr-only">(current)</span></a>

					</li>

					<li class="nav-item">

					<a class="nav-link" href="actualizar.php">Modificar</a>

					</li>

					<li class="nav-item">

					<a class="nav-link disabled" href="" tabindex = "-1" aria-disabled = "true">Eliminar</a>

					</li>

				</ul>

				<form class="form-inline my-2 my-lg-0">

					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

				</form>
			
			</div>

		</nav>

		<div class="container-fluid">

		<?php

		include "consultas.php";

		echo " <br> ";

		$consultas = new Consultas();

		$tblcabecera = "<table class = 'table table-striped'>
											<thead>
												<tr>
													<th scope = 'col'>ID</th>
													<th scope = 'col'>TIPO DE IDENTIFICACION</th>
													<th scope = 'col'>NUMERO DE IDENTIFICACION</th>
													<th scope = 'col'>NOMBRES</th>
													<th scope = 'col'>APELLIDOS</th>
													<th scope = 'col'>GENERO</th>
													<th scope = 'col'>FECHA DE NACIMIENTO</th>
													<th scope = 'col'>PAIS</th>
													<th scope = 'col'>DEPARTAMENTO</th>
													<th scope = 'col'>CIUDAD</th>
													<th scope = 'col'>DIRECCION</th>
													<th scope = 'col'>TELEFONO FIJO</th>
													<th scope = 'col'>TELEFONO CELULAR</th>
													<th scope = 'col'>FECHA DE REGISTRO</th>
													<th scope = 'col'>USUARIO REGISTRO</th>
													<th scope = 'col'>ESTADO</th>
												</tr>
											</thead>";
		
		$consultas->seleccionar_empresa("persona", $tblcabecera);

		echo "<br>";

		$consultas2 = new Consultas();

		$tblcabecera2 = "<table class = 'table table-striped' cellpadding = 10>
											<th> ID</th>
											<th> DESCRIPCION </th>";

		$consultas2->seleccionar_empresa("genero", $tblcabecera2);		

		echo "<br>";




		$consultas3 = new Consultas();

		$tblcabecera3 = "<table class = 'table table-striped' cellpadding = 10>
											<th> ID</th>
											<th> CODIGO</th>
											<th> DESCRIPCION </th>";

		$consultas3->seleccionar_empresa("tp_identificacion", $tblcabecera3);		

		echo "<br>";

		?>
		
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>