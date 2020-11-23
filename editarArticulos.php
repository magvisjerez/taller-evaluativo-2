<?php

include("BaseDatos.php");

$id=$_GET["id"];

if(isset($_POST["botonEditar"])){

    $nombre=$_POST["nombreEditar"];
    $valor=$_POST["valorEditar"];
    $foto=$_POST["fotoEditar"];
    $descripcion=$_POST["descripcionEditar"];
   
    $transaccion=new BaseDatos();

    $consultaSQL="UPDATE articulo SET nombre='$nombre',valor='$valor',foto='$foto',descripcion='$descripcion' WHERE idArticulo='$id'";
    
    $transaccion->editarDatos($consultaSQL);
    
    header("location:articulosBodega.php");

}


?>