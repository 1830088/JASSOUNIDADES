<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
	<link rel="stylesheet" type="text/css" href="Registro_1.css">
</head>
<body>

	<div class="Principal">

		<?php 

		   include 'Encabezado.php';
		?>	

		<div class="Segunda">
			
			<main>

				<div class="Cuarto">
					
					<section>
						
						<h2>Register</h2>

						<br>

						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. </p>

						<br>

						<h3>Personal Info</h3>

						<br>

						<form method="POST" action="Datos.php">

							<div>
								<label>Name*</label>
			                    <input for="nombre" type="text" id="nombre" name="nombre" required placeholder="Last, Name" >
							</div>

							<div>
								<label>Comapany Name*</label>
								<input for="compania" type="text" id="compania" name="compania" required placeholder="">
							</div>
							
							<div>
								<label>Email*</label>
								<input for="correo" type="text" name="correo" id="correo" required placeholder="">
							</div>

							<div class="request">
								<label>Request Type</label>
								<br>

								<input type="radio" name="req" id="req" value="Questions"> Question				

								<br>
								
								<input type="radio" name="req" id="req" value="Comment"> Comment

							</div>

							<div>
								<label>Comment</label>
								<textarea name="comentario"  id="comentario" maxlength="50" minlength="10">
								</textarea>
		                    </div>

		                    <br>

		                    <div>
		                    	<label></label>
		                    	<input type="checkbox" name="suscribirse" value="Si" id="suscribirse"> Suscribe to our milling list? 
		                    </div>

		                    <div>
		                    	<label>How did you hear about us?</label>

		                    	<br>

		                    	<select name="cosas" id="cosas">
					                <option id="cosas" value="0">Choose...</option>
					                <option id="cosas"  value="Internet">Internet</option>
					                <option id="cosas"  value="Anuncio">Deportes</option>
					                <option id="cosas"  value="idols">Anuncio</option>
					                <option id="cosas"  value="Periodico">Periodico</option>
					                <option id="cosas"  value="Amigos">Amigos</option>
			                    </select>
		                    </div>

		                    <div>
		                    	<input type="submit" name="enviar" id="enviar" value="Send">
		                    </div>
						</form>
						

					</section>

				</div>
				
			</main>

			 <aside>
            	
            	<article>
            		
            		<?php 

					    include 'Artistas.php';

					?>	

            	</article>


		</div>

			<?php 

			    include 'Pie.php';

			?>	
			

		</footer>

	</div>				

</body>
</html>