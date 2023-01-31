<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<?php
  include("conexion.php");
  $conexion=$base->query("SELECT * FROM productos");
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
?>

<h1>CRUD CESUR 2022</h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">CODIGOARTICULO</td>
      <td class="primera_fila">SECCION</td>
      <td class="primera_fila">NOMBREARTICULO</td>
      <td class="primera_fila">PRECIO</td>
      <td class="primera_fila">FECHA</td>
      <td class="primera_fila">IMPORTADO</td>
      <td class="primera_fila">PAISDEORIGEN</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
  
    <?php
      foreach($registros as $productos):
    ?>

		
   	<tr>
      <td><?php echo $productos->CODIGOARTICULO?> </td>
      <td><?php echo $productos->SECCION?></td>
      <td><?php echo $productos->NOMBREARTICULO?></td>
      <td><?php echo $productos->PRECIO?></td>
      <td><?php echo $productos->FECHA?></td>
      <td><?php echo $productos->IMPORTADO?></td>
      <td><?php echo $productos->PAISDEORIGEN?></td>
 
      <td class="bot"><a href="borrar.php?codA=<?php echo $productos->CODIGOARTICULO?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

      <td class='bot'>
        <a href="editarInicial.php?codA=<?php echo $productos->CODIGOARTICULO?> & sec=<?php echo $productos->SECCION?> & nomA=<?php echo $productos->NOMBREARTICULO?> & pre=<?php echo $productos->PRECIO?> & fec=<?php echo $productos->FECHA?> & impor=<?php echo $productos->IMPORTADO?> & paisO=<?php echo $productos->PAISDEORIGEN?>">
        <input type='button' name='up' id='up' value='Actualizar'>
        </a>
    </td>
    </tr>  
    
    <?php
      endforeach;
    ?>

	<tr>
    <form method="get" action="insertar.php">
        <td><input type='text' name='codA' size='10' class='centrado'></td>
        <td><input type='text' name='sec' size='10' class='centrado'></td>
        <td><input type='text' name='nomA' size='10' class='centrado'></td>
        <td><input type='text' name=' pre' size='10' class='centrado'></td>
        <td><input type='text' name=' fec' size='10' class='centrado'></td>
        <td><input type='text' name=' impor' size='10' class='centrado'></td>
        <td><input type='text' name=' paisO' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </form>
  </tr>

  <tr>
    <form method="POST" action="">
        <td><input type='text' name='codA' size='10' class='centrado' id='codA'></td>
        <td><input type='text' name='sec' size='10' class='centrado' id='sec'></td>
        <td><input type='text' name='nomA' size='10' class='centrado' id='nomA'></td>
        <td><input type='text' name=' pre' size='10' class='centrado' id='pre'></td>
        <td><input type='text' name=' fec' size='10' class='centrado' id='fec'></td>
        <td><input type='text' name=' impor' size='10' class='centrado' id='impor'></td>
        <td><input type='text' name=' paisO' size='10' class='centrado' id='paisO'></td>
        <td class='bot'><input type='submit' name='seleccionar' id='seleccionar' value='Seleccionar'></td>
        <td class='bot'><input type='submit' name='mostrar' id='mostrar' value='Mostrar Todo'></td>

          <?php

              if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (isset($_POST['seleccionar'])) {
                  $codigoarticulo = $_POST["codA"];
                  $seccion = $_POST["sec"];
                  $nombrearticulo = $_POST["nomA"];
                  $precio = $_POST["pre"];
                  $fecha = $_POST["fec"];
                  $importado = $_POST["impor"];
                  $paisdeorigen = $_POST["paisO"];
                  
                  $conexion=$base->query("SELECT * FROM productos WHERE CODIGOARTICULO LIKE '%$codigoarticulo%' OR SECCION LIKE '%$seccion%' OR NOMBREARTICULO LIKE '%$nombrearticulo%' OR PRECIO LIKE '%$precio%' OR FECHA LIKE '%$fecha%' OR IMPORTADO LIKE '%$importado%' OR PAISDEORIGEN LIKE '%$paisdeorigen%'");
                  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
                }

                if (isset($_POST['mostrar'])) {
                  $conexion=$base->query("SELECT * FROM productos");
                  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
                }

              }

          ?>

    </form>
  </tr>
      
  </table>

<p>&nbsp;</p>
</body>
</html>