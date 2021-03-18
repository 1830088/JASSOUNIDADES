<!DOCTYPE html>
<html>
<head>
	<title>Sitio Web Roux Academy</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Estilo.css">
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
						
						<h2>About The Event</h2>

						<br>

						<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

					</section>

					<br>
					<br>

					
					<?php 

				      include 'Artistas.php';

				    ?>		

					<br>
					<br>

					<section>
						
						<h2>The Venue</h2>

						<br>
				
						<div class="Quinta">

							<div class="Sexta">

								<h3>Hotel Contempo

									<img src="img/hotel_contempo.jpg" alt="Imagen No Encontrada">

								</h3>

							</div>

							<div class="Septima">

								<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua.
								<br> <br> Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. </p>

							</div>
								
						</div>	

					</section>

				</div>

			</main>

			<aside>
				
				<?php 

				    include 'Evento.php';

				?>	

				<article>

					<h2>Shedule</h2>

					<br>

					<h3>Monday</h3>

					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>

					<br>

					<h3>Tuesday</h3>

					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<br>

					<div class="link">
						
						<a href="Schedule.php">Full Schedule >> </a>

					</div>
					

				</article>

			</aside>

		</div>

		<?php 

		    include 'Pie.php';

		?>	

	</div>

</body>

</html>