<div class="container">

  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
      
      
      
<!-- Content Section --> 
<!-- crud jquery-->
<div class="da">
  <div class="row">
    <div class="col-md-12">
     
    </div>
  </div>
  <br>
 
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
        <div class="input-group mb-12"> 
    <label class="input-group-text col-7"  for="inputGroupSelect01">Edad</label>
    <select class="form-select col-5" id="edad2">
    <option selected></option>
              <option value="1">1 Año</option>
              <option value="1.6">1 Año 6 mese</option>
              <option value="2">2 Años</option>
              <option value="2.6">2 Año 6 Meses</option>
              <option value="3">3 Año</option>
              <option value="3.6">3 Año 6 mese</option>
              <option value="4">4 Años</option>
              <option value="4.6">4 Año 6 Meses</option>
              <option value="5">5 Año</option>
              <option value="5.6">5 Año 6 mese</option>
              <option value="6">6 Años</option>
              <option value="6.6">6 Año 6 Meses</option>

              <option value="7">7 Año</option>
              <option value="7.6">7 Año 6 mese</option>
              <option value="8">8 Años</option>
              <option value="8.6">8 Año 6 Meses</option>
              <option value="9">9 Año</option>
              <option value="9.6">9 Año 6 mese</option>
              <option value="10">10 Años</option>
              <option value="11">11 Año</option>
              <option value="12">12 Años</option>
          
    </select>
        </div>

      
        <input type="hidden" id="id_usuario" value="<?php echo $_SESSION['usuario']?>"> 
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
<script type="text/javascript" src="jsTallaPeso/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="jsTallaPeso/tiempov3.js"></script> 

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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





<div class="row g-12">
  <div class="col-md-6">
    <h2>Curva de crecimiento</h2>
   <!-- <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p> --->
    
    <h3> <small class="text-muted"><?php echo $row2['nombre'] ?> <?php echo $row2['apelli_Paterno'] ?> <?php echo $row2['apelli_Materno'] ?></small></h3>
    <ul class="icon-list ps-0">
    
      <li class="text-muted d-flex align-items-start mb-1">Estado de Nutricion</li>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </ul>

 
                       <?php
                          if ( $row3['id_usuario'] =="" ){
                            include ('DatosNoAgregados.php');
                          }
                          else{
                            ?>
                               <div id="records_content2"></div>
                            <?php
                          }
                       
                           ?>
   
   
  </div>

  <div class="col-md-6">
    <h2>Historial de Tall y Peso</h2>
   <!-- <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>-->
    <ul class="icon-list ps-0">
    <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar nuevos datos</button>
      </div>
</br>
    <div id="records_content"></div>


    </ul>
  </div>

</div>

</main>
</div>