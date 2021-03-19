<?php 

    require 'abre_sesion.php';


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Asistentes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
    <link rel="stylesheet" type="text/css" href="Registro_2.css">
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

                 <br>
                <br>


                <div class="Cambiar_IMG">

                    <header style="text-align: center; font-size: 20px;">Cambiar Artistas</header>
                    
                    <form class="Form_IMG" method="POST" action="Datos_2.php">

                        <label>Elija el numero de artistas para cambiar:</label>

                        <br>

                          <div>
                                <label>Posicion 1:</label>

                                <br>

                                <select name="a_1">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 2:</label>

                                <br>

                                <select name="a_2">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 3:</label>

                                <br>

                                <select name="a_3">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 4:</label>

                                <br>

                                <select name="a_4">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 5:</label>

                                <br>

                                <select name="a_5">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 6:</label>

                                <br>

                                <select name="a_6">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 7:</label>

                                <br>

                                <select name="a_7">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 8:</label>

                                <br>

                                <select name="a_8">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                            <div>
                                <label>Posicion 9:</label>

                                <br>

                                <select name="a_9">
                                    <option value="a_1">Primer Artista</option>
                                    <option value="a_2">Segundo Artistas</option>
                                    <option value="a_3">Tercer Artistas</option>
                                    <option value="a_4">Cuarto Artistas</option>
                                    <option value="a_5">Quinto Artistas</option>
                                    <option value="a_6">Sexto Artistas</option>
                                    <option value="a_7">Septimo Artistas</option>
                                    <option value="a_8">Octavo Artistas</option>
                                    <option value="a_9">Octavo Artistas</option>

                                </select>
                            </div>

                    </div>

                

                    <input type="submit" class="btn" name="aceptar" value="Cambiar">


                    </form>

                </div>


          <div class="derecha">

              <a href="cerrar_sesion.php"> Cerrar Sesion</a>
            

    	    </div>


           </div>


        <?php 

            include 'Pie.php';

        ?>  


       </div>

	</div>

	<?php 
 	Desconectar($conexion);

 	 ?>

</body>
</html>