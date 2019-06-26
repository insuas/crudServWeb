<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ACTUALIZAR</title>
  </head>
  <body>


    <div class="container">

      <h1>ACTUALIZAR DATOS</h1><hr>

      <form action="actualizar.php" method = POST>

        <div class="row">

          <div class="col">

            <input type="text " class = "form-control" placeholder = "Buscar Persona por Id" name = "id_persona">

          </div>

          <div class="col">

          <button type="submit" name = "submit_buscar" class = "btn btn-primary btn-primary btn-lg btn-block">Buscar</button>
          
          </div>
        
        </div>

      </form><hr>

      <?php

      require "Consultas.php";

      if( isset($_POST['submit_buscar']))

        {

          $submit_actualizar = "submit_actualizar";

          $consultas = new Consultas();

          $table = "persona";

          $idp = $_POST['id_persona'];

          $resultado = $consultas->seleccionar_una_empresa($table, $idp);

          if( isset($resultado))

          {
            echo"<form action = 'actualizar2.php' method = 'POST'><br> ";

              echo" <div class= 'row'>";
                // 1
                echo" <div class= 'col'>";

                  echo"<input type = 'hide' class = 'form-control' placeholder = 'Tipo de Identificación' name = 'idp' value = '$resultado[0]'>";

                echo" </div> ";
                // 2
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Tipo de Identificación' name = 'tipo_identificacion' value = '$resultado[1]'>";

                echo" </div> ";
                // 3
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Número de Identificación' name = 'numero_identificacion' value = '$resultado[2]'>";

                echo" </div> ";
                // 4
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Nombres' name = 'nombres' value = '$resultado[3]'>";

                echo" </div> ";
                // 5
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Apellidos' name = 'apellidos' value = '$resultado[4]'>";

                echo" </div> ";
              // fin 1 fila
              echo" </div>";

              echo "<br>";
              // inicio 2 fila
              echo" <div class= 'row'>";
                // 1 Género
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Género' name = 'genero' value = '$resultado[5]'>";

                echo" </div> ";
                // 2  Fecha de Nacimiento
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Fecha de Nacimiento' name = 'fecha_nacimiento' value = '$resultado[6]'>";

                echo" </div> ";
                // 3 pais
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Pais' name = 'pais' value = '$resultado[7]'>";

                echo" </div> ";
                // 4
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Departamento' name = 'departamento' value = '$resultado[8]'>";

                echo" </div> ";
                // 5
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Ciudad' name = 'ciudad' value = '$resultado[9]'>";

                echo" </div> ";

                // 6
                echo" <div class= 'col'>";

                  echo"<input type = 'text' class = 'form-control' placeholder = 'Dirección' name = 'direccion' value = '$resultado[10]'>";

                echo" </div> ";
              // fin 2 fila
              echo" </div>";

              echo "<hr>";

              echo" <button type='submit' name = '$submit_actualizar' class = 'btn btn-primary btn-lg btn-block' >Actualizar</button> ";

            echo"</form>";

          }

        }

      ?>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>