<?php 

   session_start();//Inica o continua la session
   if (!isset($_SESSION['usuario'])) {
   	   
   	   header('location: Login.php'); //redirigir a login

   	   exit;
   }

 ?>