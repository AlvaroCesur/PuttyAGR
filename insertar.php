<?php

include("conexion.php");

$codigoArticulo=$_GET["codA"];
$seccion=$_GET["sec"];
$nombreArticulo=$_GET["nomA"];
$precio=$_GET["pre"];
$fecha=$_GET["fec"];
$importado=$_GET["impor"];
$paisOrigen=$_GET["paisO"];


error_log("DALEDONDALE" . $seccion . "   " . $nombreArticulo . "   " . $precio . "   " . $fecha . "   " . $importado . "   " . $paisOrigen);
$base->query("INSERT INTO productos (CODIGOARTICULO, SECCION, NOMBREARTICULO, PRECIO, FECHA, IMPORTADO, PAISDEORIGEN) VALUES ('$codigoArticulo', '$seccion', '$nombreArticulo', '$precio', '$fecha', '$importado', '$paisOrigen')");
header("Location:indexInicial.php");

?>