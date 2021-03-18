<?php 

//Conexion a base de datos

     $bd = "evidencia";
     $servidor ="localhost";
     $usuario = "root";
     $contrasena = "";
     

     //Realizar conexiom
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);
     
    //Comprobar si se realizo aconexion
   
    if (!$conexion) {
     	
     	die('Conexion a la Base de Datos' . $bd . 'Fallo:' . mysqli_connect_eeror());

    }

     	echo "Conexion Establecida en: $bd <br>";
    




     function valida_usuario_bd($usuario, $contrasena, $conexion){

          $query = "select 1 as user_Valido from usuarios where usuario = '$usuario' and contrasena = MD5('$contrasena') ";

          echo $query . '<br';

          $resultado = mysqli_query($conexion, $query) or die('Error al ejecutar la consulta');

          if (mysqli_num_rows($resultado)==0) {
               
               return false;
               
          }else{

               return true;

          }

     }



 ?>