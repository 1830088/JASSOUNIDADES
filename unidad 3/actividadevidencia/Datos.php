<?php 
   
    
    include 'Conexion.php';

    $conexion = Conectar($servidor, $usuario, $contrasena, $bd);

    $nombre = $_POST['nombre'];
    $compania = $_POST['compania'];
    $correo = $_POST['correo'];
    $req = $_POST['req'];
    $comentario = $_POST['comentario'];
    $suscribirse = $_POST['suscribirse'];
    $cosas = $_POST['cosas'];

    $consulta = "INSERT INTO registros VALUES(NULL, '$nombre', '$compania' , '$correo', '$req', '$comentario', '$suscribirse', '$cosas')";

    
    if (mysqli_query($conexion, $consulta)) {
          
          echo "Registro Insertado <br> ";
    }else{

          echo "Error al Insertar <br>";
    }

    Desconectar($conexion);

    header("Location: Register.php");
    die();


 ?>
