<?php 

//Conexion a base de datos

     $servidor ="localhost";
     $usuario = "root";
     $contrasena = "";
     $bd = "evidencia";

     function Conectar($servidor, $usuario, $contrasena, $bd){

     	//Realizar conexiom
	    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);
	     
	    //Comprobar si se realizo aconexion
	   
	    if (!$conexion) {
	     	
	     	die('Ocurrio un Error F <br>');

	    }else{

	     	echo "Conexion Establecida <br>";
	    }


	    return($conexion);
     }

     function Desconectar($conexion){

     	//Cerrar la conexion al finalizar
        mysqli_close($conexion);

     	
     }

 ?>