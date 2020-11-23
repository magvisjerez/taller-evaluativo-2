<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Ingreso de Articulos</title>
       <link rel="stylesheet" href="estilos.css">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
       <header>

       </header>
       <main>
              <div class="container">
                 <div class="row">
                     <div class="col-4 ">
                     <a href="index.php" class="volver">Volver a inicio</a>
                     </div>
                     <div class="col-4  text-center">
                            <h3>Ingreso de Articulos</h3>
                     </div>
                     <div class="col-4  text-center">
                           
                     </div>
                 </div>
                                                                      
              </div> 

             <div class="container">
                   <form action="guardarArticulo.php" method="POST">
                            <div class="col">
                                   <div class="row">
                                                 <div class="col-6">
                                                        <label for="formGroupExampleInput borde">   Nombre Articulo</label>
                                                        <input type="text" class="form-control" placeholder="Nombre Articulo" name="nombre">
                                                        <label for="formGroupExampleInput">Marca Articulo</label>
                                                        <input type="text" class="form-control" placeholder="Marca producto" name="marca">
                                                        <label for="formGroupExampleInput">Valor Articulo</label>
                                                        <input type="text" class="form-control" placeholder="Valor Articulo" name="valor">   
                                                        <label class="font-weight">Foto:</label>
                                                        <input type="text" class="form-control" placeholder="foto URL" name="foto">                                                     
                                                 </div>   
                                   </div>                                             
                                  
                                          <div class="form-group">
                                          <label for="formGroupExampleInput2">Descripción</label>
                                          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Descripción" name="descripcion">
                                  
                            
                            </div>
                            <button type="submit" class="btn btn-primary btn-block" name="botonEnvio">Registrar Articulo</button>
                     </form>
                     <div class="row justify-content-center">
                            <img src="principal.jpg" width="250" height="180" class="d-inline-block align-center" alt="" loading="lazy">   
                     </div>
             </div>
            
             <div class="row ">
                <a href="index.php" class="volver">Volver a inicio</a>
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