 --> 
<!-- Jquery JS file --> 
<script type="text/javascript" src="jsTallaPeso/jquery-1.11.3.min.js"></script> 
<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
<script type="text/javascript" src="jsSugerencias/tiempov4.js"></script> 


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

 
                   
   
   
  </div>

  <div class="col-md-6">
    <h2>Historial de Tall y Peso</h2>
   <!-- <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>-->
    <ul class="icon-list ps-0">
    <div class="pull-right">
        <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Agregar nuevos datos</button>
      </div>
</br>


   
  <div id="Estado_nutricion"></div>
    </ul>
  </div>
</div>
</main>

