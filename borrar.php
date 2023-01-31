<?php

    include("conexion.php");

    $codigoArticulo = $_GET["codA"];
    $base->query("DELETE FROM productos WHERE CODIGOARTICULO='$codigoArticulo'");
    
    error_log("Error" . $codigoArticulo);
    header("Location:indexInicial.php");

?>