<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Datos Actualizados</title>
  </head>
  <body>
    <?php

    if( isset($_POST['submit_actualizar']))
    
    {
      require "Consultas.php";

      $consultas = new Consultas();

      echo"<h1>SE ACTUALIZARON LOS SIGUIENTES VALORES </h1> ";

      $idp = $_POST['idp'];

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

      $valoresI = "id_tp_ident_persona = $tipo_identificacion, num_ident_persona = '$numero_identificacion', nombres_persona = '$nombres',apellidos_persona = '$apellidos', id_genero_persona= $genero, fecha_nac_persona = '$fecha_nacimiento',id_pais_persona = $pais, id_depto_persona = $departamento, id_ciudad_persona = $ciudad, direccion_persona = '$direccion'";
      
      $consultas->actualizar_persona($table, $valoresI, $idp);

      echo "<table class = 'table table-striped'>
      <thead>

      <tr>

        <th scope = 'col' >

          ID

        </th>

        <th scope = 'col' >

          TIPO IDENTIFICACION

        </th>

        <th scope = 'col' >

          NUMERO IDENTIFICACION

        </th>

        <th scope = 'col' >

          NOMBRES

        </th>

        <th scope = 'col' >

          APELLIDOS

        </th>

        <th scope = 'col' >

          GENERO

        </th>

        <th scope = 'col' >

          FECHA NACIMIENTO

        </th>

        <th scope = 'col' >

          PAIS

        </th>

        <th scope = 'col' >

          DEPARTAMENTO

        </th>

        <th scope = 'col' >

          CIUDAD

        </th>

        <th scope = 'col' >

          DIRECCION

        </th>

        <th scope = 'col' >

          TEL FIJO

        </th>

        <th scope = 'col' >

          TEL CELULAR

        </th>

        <th scope = 'col' >

          FECHA REGISTRO

        </th>

        <th scope = 'col' >

          USUARIO REGISTRO

        </th>

        <th scope = 'col' >

          ESTADO

        </th>

      </tr>
    
    </thead>

    <tr>

      <td>

        $idp
      
      </td>

      <td>

        $tipo_identificacion
    
      </td>

      <td>

        $numero_identificacion
    
      </td>

      <td>

        $nombres
    
      </td>

      <td>

        $apellidos
    
      </td>

      <td>

        $genero
    
      </td>

      <td>

        $fecha_nacimiento
    
      </td>

      <td>

        $pais
    
      </td>

      <td>

        $departamento
    
      </td>

      <td>

        $ciudad
    
      </td>

      <td>

        $direccion
    
      </td>
      // 5 td vacios
      <td>

        
    
      </td>

      <td>

        
    
      </td>

      <td>

       
    
      </td>

      <td>

       
    
      </td>

      <td>


    
      </td>
    
    </tr>
  </table>
      
      
      
      ";
    }
    
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>