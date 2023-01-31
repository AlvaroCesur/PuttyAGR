<?php

    include("conexion.php");

    $codigoArticulo=$_GET["codA"];
    $seccion=$_GET["sec"];
    $nombreArticulo=$_GET["nomA"];
    $precio=$_GET["pre"];
    $fecha=$_GET["fec"];
    $importado=$_GET["impor"];
    $paisOrigen=$_GET["paisO"];

    $base->query("UPDATE productos SET codA='$codigoArticulo' sec='$seccion', nomA='$nombreArticulo', pre='$precio', fec='$fecha', impor='$importado', paisO='$paisOrigen' WHERE codA='$codigoArticulo'");
    header("Location:indexInicial.php");

?>