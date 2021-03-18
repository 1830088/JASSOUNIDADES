<?php 

    require 'abre_sesion.php';


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Asistentes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>

	<?php 

     include ('Conexion.php'); 

     $conexion = Conectar($servidor, $usuario, $contrasena, $bd);

     ?>


	<div class="Principal">
		
		<?php 

	      include 'Encabezado.php';

	    ?>


        <div class="Segunda">

    	    <div style="text-align: center;" class="Tabla_Registro">

                <header style="text-align: center;">Registros</header>
    	    	
    	    	<table class="Tabla" id="tabla">

    	    		<tr>

                     <th>Nombre</th>
                     <th>Compania</th>
                     <th>Correo</th>
                     <th>Request</th>
                     <th>Comentario</th>
                     <th>Suscribcion</th>
                     <th>Cosas</th>

                    </tr>

                    <?php 

                         $consulta = "SELECT * FROM registros";

                         $registros = mysqli_query($conexion,$consulta);  

                         while ($mostrar = mysqli_fetch_array($registros)) {
                         
                   
                     ?>

                    <tr>
                         <td> <?php echo $mostrar['nombre']; ?> </td>
                         <td> <?php echo $mostrar['compania']; ?> </td>
                         <td> <?php echo $mostrar['correo']; ?> </td>
                         <td> <?php echo $mostrar['req']; ?> </td>  
                         <td> <?php echo $mostrar['comentario']; ?> </td>
                         <td> <?php echo $mostrar['suscribirse']; ?> </td>
                         <td> <?php echo $mostrar['cosas']; ?> </td>

                    </tr>

                    <?php 

                        }

                     ?>
    	    		
    	    	</table>



    	    </div>


          <div class="derecha">

              <a href="cerrar_sesion.php"> Cerrar Sesion</a>
            
           </div>

       </div>

		<?php 

		    include 'Pie.php';

		?>	

	</div>

	<?php 


 	Desconectar($conexion);

 	 ?>

</body>
</html>