<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);


$varsesionlocal= $_SESSION['usuario'];
if($varsesionlocal== null || $varsesionlocal=''){


    header("location:../index.php");
    die();
    
}

?>
      <?php
  
 include 'conexion-tabla.php';
  
  $objeto = new Conexion();
  $conexion = $objeto->Conectar();
  session_start(); 


  $usuario=$_SESSION['usuario'];

  $consulta2 = "SELECT * FROM misdatos WHERE id_usuario='$usuario'";
  $resultado2 = $conexion->prepare($consulta2);
  $resultado2->execute();
  $row2=$resultado2->fetchAll(PDO::FETCH_ASSOC);
  

                        foreach($row2 as $row2){
                    
  
                        }



  $consulta3 = "SELECT * FROM tallapeso WHERE id_usuario='$usuario'";
  $resultado3 = $conexion->prepare($consulta3);
  $resultado3->execute();
  $row3=$resultado3->fetchAll(PDO::FETCH_ASSOC);
  

                        foreach($row3 as $row3){
                    
  
                        }

                    
                    ?>
                 
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Talla y Peso</title>

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
<main>
  

                        

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mi empresa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
           <li class="nav__item">
            <a class="nav-link"href="home.php">Inicio</a>
            </li>
            <li class="nav__item">
            <a class="nav-link active blue-box" href="#">Peso y Talla</a>
            </li>
            <li class="nav__item">
            <a class="nav-link" href="Vacunas.php">Vacunas</a>
            </li>
            <li class="nav__item">
              <a class="nav-link" href="sugerencias.php">Sugerencias</a>
            </li>
            
            <li class="nav__item">
              <a class="nav-link" href="misDatos.php">Datos Personale</a>
            </li>
           
        <li class="nav__item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Opciones de Cuenta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="miCuenta.php">Mi Cuenta</a>
       
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../cerrarSesion.php">Cerrar Sesión</a>
        </div>
      </li>
      </ul>
    </div>
  </div>
</nav>


  <div class="container my-12">
    <?php
  if ( $row2['id_usuario'] =="" ){
                            ?>
                            
                            <div class="alert alert-primary" role="alert">
                            Datos de Personales. Aun vacios <a href="misDatos.php" class="alert-link">Mis Datos</a>. Da click para llenar.</div>
                            <script type="text/javascript" src="jsTallaPeso/jquery-1.11.3.min.js"></script> 
<script src="dist/js/bootstrap.min.js"></script> 
                           <?php
                            
  
                          }
                     
                          else{
                      include ('inicioHome.php'); 
                            
                          }
                       
                           ?>


</main>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!---------iconv_strpos---->

</html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">