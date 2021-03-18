<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Libros</title>
</head>
<body>
	<main>
	<a href="registro.php" title="">Agregar</a>
	<table>

			<tr>
				<th>Título</th>
				<th>Autor</th>
			
				<th>Editorial</th>
				<th>
				paginas</th>
			</tr>
			<?php
				require('conexion.php');
				$conexion= conectar("localhost","id15585774_root","h5z@utUCs8X/5p!Q","id15585774_sistema");
			
		if(ISSET($POST['titulo'])){
			$titulo = $POST['titulo']; 
			$autor = $POST['autor']; 
			$edit= $POST['editorial'];
			
			$enlace= $POST['paginas']; 
			$consulta ="INSERT INTO personas values(NULL,'$titulo','$auor','$edit','$paginas')";

			if(mysqli_query($conexion,$consulta)){
				
			}else{
				echo "Hubo un error";
			}
		}
				$consulta ="SELECT titulo,autor,editorial,paginas FROM biblioteca";

				$registros=mysqli_query($conexion,$consulta);
				if($registros->num_rows>0){
					while($fila = $registros -> fetch_assoc()){
						echo "<tr>";
							echo "<td>" . $fila["titulo"] . "</td>";
							echo "<td>" . $fila["autor"] . "</td>";
						
							echo "<td>" . $fila["editorial"] . "</td>";
							echo "<td>" . $fila["pagnas"] . "</td>";
						echo "</tr>";
					}
				}

				desconectar($conexion);
			?>
	</table>
	</main>
</body>
</html>
