
<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">HISTORIAL DE VACUNAS</h3>
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
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Nueva Vacuna</button>
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
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Agregar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <form class="row g-3">
          <div class="col-md-12">
            <div class="input-group flex-nowrap">
              <label class="input-group-text" for="inputGroupSelect01">Vacuna</label>
              <select class="form-select" id="vacuna">
                <option selected></option>
                <option value="BCG">BCG</option>
                <option value="HEPATITIS B">HEPATITIS B</option>
                <option value="PENTAVALENTE ACELULAR">PENTAVALENTE ACELULAR</option>
              </select>
              <span class="input-group-text" id="addon-wrapping">Otras</span>
              <input type="text" class="form-control" id="vacunas_otras" value="" placeholder="Especificar" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
          </div>
</br></br>

          <div class="col-md-12">
           <div class="input-group flex-nowrap">
           <label class="input-group-text"  for="inputGroupSelect01"> DOSIS</label>
          <select class="form-select" id="dosis">
            <option selected></option>
            <option value="PRIMERA">PRIMERA</option>
            <option value="SEGUNDA">SEGUNDA</option>
            <option value="TERCERA">TERCERA</option>
            
           </select>
           <label class="input-group-text"  for="inputGroupSelect01">EDAD</label>
          <select class="form-select" id="edadVacuna">
            <option selected></option>
              <option value="1 Año">1 Año</option>
              <option value="1 Año y 6 Mese">1 Año 6 mese</option>
              <option value="2 Años ">2 Años</option>
              <option value="2 Años y 6 Mese">2 Años 6 Meses</option>
              <option value="3 Años">3 Año</option>
              <option value="3 Años y 6 Mese">3 Año 6 mese</option>
              <option value="4 Años">4 Años</option>
              <option value="4 Años y 6 Mese">4 Año 6 Meses</option>
              <option value="5 Años">5 Años</option>
              <option value="5 Años y 6 Mese">5 Año 6 mese</option>
              <option value="6 Años">6 Años</option>
              <option value="6 Años y 6 Mese">6 Año 6 Meses</option>

              <option value="7 Años">7 Años</option>
              <option value="7 Años y 6 Mese">7 Año 6 mese</option>
              <option value="8 Años">8 Años</option>
              <option value="8 Años y 6 Mese">8 Año 6 Meses</option>
              <option value="9 Años">9 Años</option>
              <option value="9 Años 6 Mese">9 Año 6 mese</option>
              <option value="10 Años">10 Años</option>
              <option value="11 Años">11 Años</option>
              <option value="12 Años">12 Años</option>
            
           </select>

</div>  <input type="hidden" id="id_usuarioVacunas" value="<?php echo $_SESSION['usuario']?>"> 
</div> 

        </form>
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
<script type="text/javascript" src="jsVacuna/scriptV3.js"></script> 
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

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

