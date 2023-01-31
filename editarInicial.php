<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

  include("conexion.php");

  $codigoArticulo=$_GET["codA"];
  $seccion=$_GET["sec"];
  $nombreArticulo=$_GET["nomA"];
  $precio=$_GET["pre"];
  $fecha=$_GET["fec"];
  $importado=$_GET["impor"];
  $paisOrigen=$_GET["paisO"];

?>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="get" action="actualizar.php">
  <table width="25%" border="0" align="center">
    <tr>
      <td>CODIGOARTICULO</td>
      <td><label for="codA"></label>
      <input type="text" name="codA" id="codA" value="<?php echo $codigoArticulo?>"></td>
    </tr>
    <tr>
    <tr>
      <td>SECCION</td>
      <td><label for="sec"></label>
      <input type="text" name="sec" id="sec" value="<?php echo $seccion?>"></td>
    </tr>
    <tr>
      <td>NOMBREARTICULO</td>
      <td><label for="nomA"></label>
      <input type="text" name="nomA" id="nomA" value="<?php echo $nombreArticulo?>"></td>
    </tr>
    <tr>
      <td>PRECIO</td>
      <td><label for="pre"></label>
      <input type="text" name="pre" id="pre" value="<?php echo $precio?>"></td>
    </tr>
    <tr>
      <td>FECHA</td>
      <td><label for="fec"></label>
      <input type="text" name="fec" id="fec" value="<?php echo $fecha?>"></td>
    </tr>
    <tr>
      <td>IMPORTADO</td>
      <td><label for="impor"></label>
      <input type="text" name="impor" id="impor" value="<?php echo $importado?>"></td>
    </tr>
    <tr>
      <td>PAISDEORIGEN</td>
      <td><label for="paisO"></label>
      <input type="text" name="paisO" id="paisO" value="<?php echo $paisOrigen?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>