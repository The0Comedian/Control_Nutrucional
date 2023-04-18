<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);

$varsesion= $_SESSION['user_email_address'];
$varsesionlocal= $_SESSION['usuario'];
if($varsesionlocal== null || $varsesionlocal=''){
if($varsesion== null || $varsesion=''){

    header("location:../index.php");
    die();
  }
   
}

?>
      <?php
  
 include 'conexion-tabla.php';
  
  $objeto = new Conexion();
  $conexion = $objeto->Conectar();
  session_start(); 
  $user_email_address=$_SESSION['user_email_address'];
  $usuario=$_SESSION['usuario'];
  if($user_email_address=$_SESSION['user_email_address']){
    header("location: index.php");
    die();
  }
  if( $usuario=$_SESSION['usuario']){
    header("location: home.php");
    die();
  }
  
                    ?>