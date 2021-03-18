
<?php 

   require  'abre_sesion.php';
   $_SESSION = array();
   session_destroy();

   header('location: Login.php'); //redirigir a login

    exit;

 ?>

