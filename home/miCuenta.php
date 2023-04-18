<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);


$varsesionlocal= $_SESSION['user_email_address'];
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
              <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misDatos.php">Mis Datos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Datos Parentescos</a>
            </li>
           
            <li class="nav-item dropdown">
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
    </div>
  </nav>

<!------------------------------------>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">CRUD Ajax PHp y MySQL</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Observación</button>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <div id="records_content"></div>
    </div>
  </div>
</div>
<!-- /Content Section --> 

<!-- Bootstrap Modals --> 
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
      <div class="modal-header">
        <h5 class="modal-title">Agregar comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="id_alumno">Nombre</label>
          <input  type="text" id="nombre" value=""  class="form-control"/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Correo</label>
          <input type="text" disabled id="usuario"  value="<?php echo $_SESSION['user_email_address']?>"   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Nueva contraseña</label>
          <input type="text" id="Contraseña" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Nueva contraseña</label>
          <input type="text" id="newContraseña" class="form-control" value=""/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="addRecord()">Agregar</button>
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
   
    <div class="modal-header">
        <h5 class="modal-title">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      
      
      <div class="modal-body">
        <!----
        <div class="form-group">
          <label for="idalumno">Nombre</label><?php //echo $row2['Nombre']?>
          <input type="text" id="update_idalumno" value="" class="form-control"/>
        </div>
        --->
        <div class="form-group">
          <label for="codalumno">Usuario</label>
          <input type="text" disabled id="obs"  value="<?php echo $_SESSION['user_email_address']?>"class="form-control"/>
 
        </div>
        <div class="form-group">
          <label for="obs">Nueva Contraseña</label>
          <input type="password" id="update_pass" placeholder="Nueva Contraseña" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="obs">Nueva Contraseña</label>
          <input type="password" id="update_pass2" placeholder="Repetir Contraseña" class="form-control"/>
         <!-- <input type="passworrd" id="update_obs" placeholder="Repetir Contraseña" class="form-control"/>--->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Guardar Cambios</button>
        <input type="hidden" id="hidden_user_id">
      </div>
    </div>
  </div>
</div>
<!-- // Modal --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="jsCuenta/script22.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>

<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>