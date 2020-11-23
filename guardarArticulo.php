<?php

    include("BaseDatos.php");

    if (isset($_POST["botonEnvio"])){
        
        //1. recibir los datos desde la vista (interfaz de usuario)
        $nombre= $_POST["nombre"];
        $marca=$_POST["marca"];
        $valor=$_POST["valor"];
        $foto=$_POST["foto"];
        $descripcion=$_POST["descripcion"];
        

        //2. crear una copia de la clase BaseDatos
        //crear un objete de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3. Crear una consulta SQL para agregar datos
        $consultaSQL="INSERT INTO articulo(nombre,marca,valor,foto,descripcion) VALUES ('$nombre','$marca','$valor','$foto','$descripcion')";

        //4. Utilizar la funcion para insertar datos de 
        // la clase BaseDatos
        $transaccion->agregarDatos($consultaSQL);

        // 5 redireccion

        header("location:ingresodearticulos.php");


        

        
    }


?>
