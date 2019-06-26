<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>GUARDAR DATOS</title>

  </head>

  <body>

    <div class="container">

      <h1>GUARDAR DATOS</h1><hr>

      <form action="insertar.php" method = "POST">
        <!-- primera fila -->
        <div class="row">
          <!-- 1 -->
          <div class="col">

            <input type="text" class = "form-control" placeholder = "tipo de Identificación" name = "tipo_identificacion">

          </div>
           <!-- 2 -->
          <div class="col">

            <input type="text" class = "form-control" placeholder = "número de Identificación" name = "numero_identificacion">

          </div>
          <!-- 3 -->
          <div class="col">

          <input type="text" class = "form-control" placeholder = "Nombres" name = "nombres">

          </div>
          <!-- 4 -->
          <div class="col">

          <input type="text" class = "form-control" placeholder = "Apellidos" name = "apellidos">

          </div>
      
        </div> <br>


        <!-- segunda fila -->
        <div class="row">
          <!-- 1 columna -->
          <div class="col">

            <input type="text" class = "form-control" placeholder = "Género" name = "genero">

          </div>
           <!-- 2 columna -->
          <div class="col">

            <input type="text" class = "form-control" placeholder = "Fecha De Nacimiento" name = "fecha_nacimiento">

          </div>
          <!-- 3 columna-->
          <div class="col">

          <input type="text" class = "form-control" placeholder = "País" name = "pais">

          </div>
          <!-- 4 columna-->
          <div class="col">

          <input type="text" class = "form-control" placeholder = "Departamento" name = "departamento">

          </div>
           <!-- 5 columna-->
          <div class="col">

            <input type="text" class = "form-control" placeholder = "Ciudad" name = "ciudad">

          </div>

          <!-- 6 columna-->
          <div class="col">

            <input type="text" class = "form-control" placeholder = "Dirección" name = "direccion">

          </div>

        </div> <hr>

        <button type = "submit" name = "submit" class = "btn btn-primary btn-lg btn-block">Guardar</button>
       
      </form>
    
    </div>

    <?php

    require "consultas.php";

    if( isset($_POST['submit']))
    
    {
      $tipo_identificacion = $_POST['tipo_identificacion'];

      $numero_identificacion = $_POST['numero_identificacion'];

      $nombres = $_POST['nombres'];

      $apellidos = $_POST['apellidos'];

      $genero = $_POST['genero'];

      $fecha_nacimiento = $_POST['fecha_nacimiento'];

      $pais = $_POST['pais'];

      $departamento = $_POST['departamento'];

      $ciudad = $_POST['ciudad'];

      $direccion = $_POST['direccion'];

      $table = "persona";

      $camposI = "id_tp_ident_persona,num_ident_persona,nombres_persona,apellidos_persona,id_genero_persona,fecha_nac_persona,id_pais_persona,id_depto_persona,id_ciudad_persona,direccion_persona";

      $valoresI = $tipo_identificacion.",'".$fecha_nacimiento."',".$pais.",".$departamento.",".$ciudad.",'".$direccion."'";

      // .'".$apellidos."',".$genero.",'".$fecha_nacimiento."',".$pais.",".$departamento.",".$ciudad.",'".$direccion."'";

      $consultas = new Consultas();

      $consultas->insertar_persona($table, $camposI, $valoresI);

    }   
    
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>