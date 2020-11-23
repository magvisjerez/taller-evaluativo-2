<?php 

class BaseDatos {

//atributos == variables
public $usuarioBD="root";
public $passwordBD="";



//funcion especial que se llama constructor
public function __construct(){}


//metodos== funciones
    public function conectarBD(){

        try{
        
            $infoDB="mysql:host=localhost;dbname=jerezshop";
            $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);
            echo("conectado");
           

        }catch(PDOException $error){

            echo($error->getMessage());

        }

    }

    public function agregarDatos($consultaSQL){

        //1.Conectarme a la base de datos
        $conexionBD=$this->conectarBD();
    
        //2.Preparar la consulta que se va a realizar
         $consultaInsertarDatos=$conexionBD->prepare($consultaSQL);
    
        //3. Ejecutar la consulta
        $resultado=$consultaInsertarDatos->execute();
    
        //4. Verificar el resultado
        if($resultado){
            echo("Registro agregado con exito");
        }else{
            echo("Error agregando el registro");
        }
    }

    Public  function consultarDatos($consultaSQL){

        //1.Conectarme a la base de datos
        $conexionBD=$this->conectarBD();

        //2.Preparar la consulta que se va a realizar
        $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

        //3. Definir la forma en la que vmos a traer los datos
        // setFetchMode
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        //4.Ejecutar la consulta
        $consultaBuscarDatos->execute();

        //5. Retornar los datos consultados
        return($consultaBuscarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL){

        //1.Conectarme a la base de datos
        $conexionBD=$this->conectarBD();
    
        //2.Preparar la consulta que se va a realizar
         $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
    
        //3. Ejecutar la consulta
        $resultado=$consultaEliminarDatos->execute();
    
        //4. Verificar el resultado
        if($resultado){
            echo("Registro eliminado con exito");
        }else{
            echo("Error al eliminar el registro");
        }
    }

    public function editarDatos($consultaSQL){

        //1.Conectarme a la base de datos
        $conexionBD=$this->conectarBD();
    
        //2.Preparar la consulta que se va a realizar
         $consultaEditarDatos=$conexionBD->prepare($consultaSQL);
    
        //3. Ejecutar la consulta
        $resultado=$consultaEditarDatos->execute();
    
        //4. Verificar el resultado
        if($resultado){
            echo("Registro editado con exito");
        }else{
            echo("Error editando el registro");
        }
       
    }
    
     
}

?>
