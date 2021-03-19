<?php 
   
    
    include 'Conexion.php';

    $conexion = Conectar($servidor, $usuario, $contrasena, $bd);

   
    $consulta_1= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_1']."'";

    $consulta_2= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_2']."'";

    $consulta_3= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_3']."'";

    $consulta_4= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_4']."'";

    $consulta_5= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_5']."'";

    $consulta_6= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_6']."'";

    $consulta_7= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_7']."'";

    $consulta_8= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_8']."'";

    $consulta_9= "SELECT imagen FROM imagenes WHERE nombre='"  .$_POST['a_9']."'";

   

    //$registros = mysqli_query($conexion,$consulta); 


/* ejecutar multi consulta */



 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>Cambio de Artistas</title>
     <link rel="stylesheet" type="text/css" href="Estilo.css">
     <meta charset="utf-8">
 </head>
 <body>

    <div class="Cambio_Artistas">
        
        <section>

        <h2>Featured Artists</h2>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <br>


        <div class="grid3">

            <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 1 -->

            <?php 

                if (mysqli_multi_query($conexion, $consulta_1)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 2 -->
     
            
            <?php 

                if (mysqli_multi_query($conexion, $consulta_2)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 3 -->

             <?php 

                if (mysqli_multi_query($conexion, $consulta_3)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 4 -->

              <?php 

                if (mysqli_multi_query($conexion, $consulta_4)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 5 -->

              <?php 

                if (mysqli_multi_query($conexion, $consulta_5)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 6 -->

              <?php 

                if (mysqli_multi_query($conexion, $consulta_6)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 7 -->

              <?php 

                if (mysqli_multi_query($conexion, $consulta_2)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 8 -->

              <?php 

                if (mysqli_multi_query($conexion, $consulta_8)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>

              <!-- Codigo para solicitar el valor ingresado y cambiar la imagen, esto es para la consulta 9 -->

              <?php 

                if (mysqli_multi_query($conexion, $consulta_9)) {
                do {
                    /* almacenar resultado de la primera consulta */
                    if ($result = mysqli_store_result($conexion)) {
                        while ($row = mysqli_fetch_row($result)) {

             ?>
            
            <div class="item"> <img src=" <?php echo "\n", $row[0]; ?> " alt="Imagen No Encontrada"></div>


            <?php 

                               }
                            mysqli_free_result($result);
                        }
                    } while (mysqli_next_result($conexion));
                }


             ?>           

    </div>

    <br>

    <div class="link">
        <a href="Artist.html"> View Artist Info >> </a> 
    </div>

    <br>
    <br>

    <a href="Asistentes.php">Volver a Asistentes</a>

    

</section>
    </div>
 
 </body>
 </html>
