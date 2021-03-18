<?php 

    require 'Conexion_2.php';
    $valido = false;

    if (isset($_POST['aceptar'])) {
    	
    	$usuario = $_POST['usuario'];
    	$contrasena = $_POST['contrasena'];

    	if (!valida_usuario_bd($usuario, $contrasena, $conexion)) {
    		
    		echo "No es Valido <br>";
    		$valido = false;
    	}else{

    		echo "Si es Valido <br>";
    		session_start();
    		$valido = true;
    		$_SESSION['usuario']= $usuario;
    		header('location: Asistentes.php');
    	}
    }


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
</head>
<body>

	<div class="Principal">
		
		<?php 

	      include 'Encabezado.php';

	    ?>

	    <div style="text-align: center;" class="Segunda">
	    
			<div class="Principal_Login">

				<header>Login</header>

				<br>

			 <div class="Contenido_Login">
		 		
		 		<form method="POST" accept=" <?php echo htmlspecialchars($SERVER['PHP_SELF']); ?> ">

		 			<div>
		 				
		 				<label>Usuario:</label>
		 			
		 			     <input type="text" class="form_ctrl" name="usuario" placeholder="Usuario" required="Introduce el Nombre de Usuario">

		 			</div>

		 			<div>
		 				
			 			<label>Contrasena:</label>

			 			<input type="password" class="form_ctrl" name="contrasena" placeholder="Contrasena" required="Introduce la Contrasena de Usuario">

		 			</div>

		 			<div class="Boton_Registro">

		 			<input type="submit" class="btn" name="aceptar" value="Ingresar">

		 			</div>

		 			<?php 

		 			   if (!$valido && isset($_POST['aceptar'])) {
		 			   	
		 			   	  echo ' <p class="alerta"> Usuario y/o Contrasena no Validos </p> ';
		 			   }

		 			 ?>

		 		 	
		 		</form>
         
	         </div>

	    </div>
	    	


	    </div>	
	    
	   


		<?php 

		    include 'Pie.php';

		?>	

	</div>

</body>
</html>