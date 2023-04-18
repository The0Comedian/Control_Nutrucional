
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
      <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar Nuevos Datos</button>
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
          <label for="id_alumno">Talla</label>
          <input type="text" id="talla" value=""   class="form-control"/>
         
        </div>
        <div class="form-group">
          <label for="Cod ALumno">Peso</label>
          <input type="text" id="peso" value=""   class="form-control"/>
        </div>
        <div class="form-group">
          <label for="CodMatri">edad</label>
          <input type="text" id="edad2" class="form-control" value=""/>
        </div>
      
        <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['user_email_address']?>"> 
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
<script type="text/javascript" src="home/js/script3.js"></script> 
<!-- Fin crud jquery-->



      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>


<!-- Bootstrap core JavaScript
    ================================================== --> 
<script src="dist/js/bootstrap.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>