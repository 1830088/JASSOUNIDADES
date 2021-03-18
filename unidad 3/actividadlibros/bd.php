<?php

    require('conexion.php');
    
    $conexion= conectarBD("localhost","id15585774_root","h5z@utUCs8X/5p!Q","id15585774_sistema");
    $consulta ="select id, nombre, edad, direccion from personas ";

    $registros=mysqli_query($conexion,$consulta);
    // var_dump($registros);
    if($registros->num_rows>0){
        while($fila = $registros -> fetch_assoc()){
            echo "ID: " . $fila["id"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Edad: " . $fila["edad"] . "<br>";
            echo "Direcccion: " . $fila["direccion"] . "<br>";

        }
    }

    // cerrar la conexion
    desconectar($conexion);



?>