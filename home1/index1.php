<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<!-- Bootstrap core CSS -->

<!-- Custom styles for this template -->

<body>


<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Mis Datos Personales</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
   
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

<body class="bg-light">

<main id="perfilform" >
  <div class="container">     

  <div class="col-md-12">
           <div class="input-group flex-nowrap">
           <span class="input-group-text" id="addon-wrapping">Nombre</span>
           <input type="text" class="form-control"  id="nombre"  value=""  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
           <span class="input-group-text" id="addon-wrapping">Apellido Paterno</span>
          <input type="text" class="form-control"  id="apelli_paterno"  value=""  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
          <span class="input-group-text" id="addon-wrapping">Apellido Materno</span>
          <input type="text" class="form-control" id="apelli_Materno"  value=""  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        </div>      
        </div>
</br>
          <div class="col-md-12">
           <div class="input-group flex-nowrap">
           <div class="input-group mb-3"> 
          <label class="input-group-text"  for="inputGroupSelect01"> Sexo</label>
           <select class="form-select" id="sexo">
            <option selected  placeholder="Username"></option>
            <option value="1">Hombre</option>
            <option value="2">Mujer</option>
             <option value="3">Otro</option>
           </select>
           <span class="input-group-text" id="addon-wrapping">Fecha de Nacimiento</span>
  <input type="text" class="form-control"  id="fecha_Nacimiento"  value=""  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">

  <span class="input-group-text" id="addon-wrapping">Edad</span>
  <input type="text" class="form-control"   id="edads"  value=""  placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
        
     
          <input type="hidden" id="obs" value="<?php echo $row2['usuario']  ?>"> 
          <!--<input type="text" id="obs" class="form-control"/>--> 
       
      </div>
      <div class="modal-footer">

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
          <label for="idalumno">Cod. Alumno</label>
          <input type="text" id="update_idalumno" value="" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="codalumno">Cod. Alumno</label>
          <input type="text" id="update_codalumno" placeholder="Last Name" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="obs">Observaciones</label>
          <textarea style="text-transform:uppercase" id="update_obs" class="form-control"></textarea>
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
<script type="text/javascript" src="js/scriptV2.js"></script> 
<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->


<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>