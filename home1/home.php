
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
  if($user_email_address===""){

  }

  $usuario=$_SESSION['usuario'];                  

  $consulta2 = "SELECT * FROM userlocal WHERE usuario='$usuario'";
  $resultado2 = $conexion->prepare($consulta2);
  $resultado2->execute();
  $row2=$resultado2->fetchAll(PDO::FETCH_ASSOC);
  

                        foreach($row2 as $row2){
                    
  
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
    <title>Inicio</title>

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="estilos/home.css">
 
  </head>
  <body>
    
<main>
  

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Control Nutricional</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbar2Label"></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misDatos.php">Mis Datos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Datos Parentescos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Opciones de Cuenta
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mi Cuenta</a></li>
             
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../cerrarSesion.php">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>
  <a routerLink="/" class="navbar-brand">  <?php  echo $row['email']?></a>
  <a routerLink="/" class="navbar-brand">  <?php  echo $row['id']?></a>
  <a routerLink="/" class="navbar-brand">  <?php  echo $row2['usuario']?></a>
  <div class="container my-5">
    <div class="bg-light p-5 rounded">
      <div class="col-sm-8 py-5 mx-auto">
        <h1 class="display-5 fw-normal">Navbar with offcanvas examples</h1>
        <p class="fs-5">This example shows how responsive offcanvas menus work within the navbar. For positioning of navbars, checkout the <a href="../examples/navbar-static/">top</a> and <a href="../examples/navbar-fixed/">fixed top</a> examples.</p>
        <p>From the top down, you'll see a dark navbar, light navbar and a responsive navbar—each with offcanvases built in. Resize your browser window to the large breakpoint to see the toggle for the offcanvas.</p>
        <p>
          <a class="btn btn-primary" href="../components/navbar/#offcanvas" role="button">Learn more about offcanvas navbars &raquo;</a>
        </p>
    </div>
    </div>
  </div>
</main>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
