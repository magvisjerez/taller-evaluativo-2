<?php

include("BaseDatos.php");

$id=$_GET["id"];

$transaccion=new BaseDatos();

$consultaSQL="DELETE FROM articulo WHERE idArticulo='$id'";

$transaccion->eliminarDatos($consultaSQL);



?>