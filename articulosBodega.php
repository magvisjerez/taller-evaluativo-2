<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articulos en Bodega</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
    <div class="row  justify-content-center">
        <h3>Articulos en Bodega</h3>
    </div>
    </header>
    <main>
        <?php
        include("BaseDatos.php");

        $transaccion=new BaseDatos();

        $consultaSQL="SELECT * FROM articulo where 1";

        $articulo=$transaccion->consultarDatos($consultaSQL);

        
        ?>

        <div class="container">
             <div class="row">
                <a href="index.php" class="volver">Volver a inicio</a>
             </div>

             <div class="row row-cols-1 row-cols-md-3">

               <?php foreach($articulo as $articulos):?>
                    <div class="col mb-4">
                        <div class="card h-100">
                          <img src="<?php echo($articulos["foto"]) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo($articulos["nombre"])?></h3>
                                <p class="card-text"><?php echo($articulos["marca"])?></p>
                                <p class="card-text"><?php echo($articulos["valor"])?></p>
                              
                                <p class="card-text"><?php echo($articulos["descripcion"])?></p>
                                <a href="eliminarArticulo.php?id=<?php echo($articulos["idArticulo"])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($articulos["idArticulo"])?>">
                                  Editar
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="editar<?php echo($articulos["idArticulo"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edicion de Usuario</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <img src="<?php echo($articulos["foto"]) ?>" class="card-img-top" alt="...">
                                                <form action="editarArticulos.php?id=<?php echo($articulos["idArticulo"])?>" method="POST">
                                                   <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input type="text" class="form-control" name="nombreEditar" value=<?php echo($articulos["nombre"])?>>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Valor:</label>
                                                            <textarea class="form-control" rows="3" name="valorEditar"> <?php echo($articulos["valor"]) ?>  </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                    <label>Foto:</label>
                                                            <textarea class="form-control" rows="3" name="fotoEditar"> <?php echo($articulos["foto"]) ?>  </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                            <label>descripcion:</label>
                                                            <textarea class="form-control" rows="3" name="descripcionEditar"> <?php echo($articulos["descripcion"]) ?>  </textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                                </form>
                                            </div>
                                        </div>
                                 </div>
           
                        </div>

                    </div>
               <?php endforeach?>
            </div> 
            <div class="row">
                <a href="index.php" class="volver">Volver a inicio</a>
             </div>      
        </div>
     
    </main>
    <footer>
    <div class="row text-center">
                <div class="col-12">
                    <h6>magvis jerez</h6>
                    <h6>gerente</h6>
                    <h6>&#9993;magvis.jerez@yahoo.com</h6>
                    <h6>&#9743;3113030384</h6>
                </div>
            </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>