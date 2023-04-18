<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];

if($varsesion== null || $varsesion=''){
    header("location:index.php");
    die();
}
?>
   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a class="nav-link" href="cerrarSesion.php">
  <div class="p-3 mb-2 bg-info text-white">cerrar<i class="fa fa-power-off fa-4x"></i></div>  </a>

               
      </div>
    <h4>Bienbeid </h4>
    
</body>
</html>