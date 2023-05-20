<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>CRUD Ajax PHp y MySQL | BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>
<link rel="stylesheet" href="css/styleCuenta.css">
<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mi empresa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 " id="nav">
      <li class="nav__item">
      <a class="nav-link"href="index.php">Inicio</a>


  </li>
              <li class="nav__item">
                <a class="nav-link active blue-box" href="cuentas.php">CUENTA ADMIN</a>
              </li>
              <li class="nav__item">
                <a class="nav-link"  href="../cerrarSesion.php">CERRAR SESION <i class="bi bi-power"></i></a>
              </li>
            
         
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Cuentas Platinum</h3>
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
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Cuenta</button>
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
        <h5 class="modal-title">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      
      
      <div class="modal-body">
        <div class="form-group">
          <label for="id_alumno">Nombre</label>
          <input  type="text" id="Nombre" value=""  class="form-control"/>
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Usuario</label>
          <input type="text" id="Usuario" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Contraseña</label>
          <input type="text" id="Contraseña" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Contraseña</label>
          <input type="text" id="newContraseña" class="form-control" value=""/>
        </div>
        <input type="hidden" id="t_usuario" value="1"> 
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
      <div class="form-group">
          <label for="Cod ALumno">Usuario</label>
          <input type="text" id="update_Usuario" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Contraseña</label>
          <input type="text" id="update_Contraseña" class="form-control" value=""/>
        </div>
        <div class="form-group">
          <label for="CodMatri">Contraseña</label>
          <input type="text" id="update_newContraseña" class="form-control" value=""/>
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
<script type="text/javascript" src="js/scriptA1.js"></script> 
<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>


<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>