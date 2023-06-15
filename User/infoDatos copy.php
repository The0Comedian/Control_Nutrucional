<style>
    #resultado{
      display: none;
    }
      </style>
       <div id="resultado">
      <?php include ('completoDatos.php');?>
      </div><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<!--CODIGO  PARA ICONO DE NAVEGOR <link rel="icon" type="image/png" href="assets/img/favicon.png">-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Datos Personales</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">


	<link href="assetscp/css/gsdk-bootstrap-wizard1.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assetscp/css/demo.css" rel="stylesheet" />
</head>

<body>

    <!--   Creative Tim Branding   -->


	<!--  Made With Get Shit Done Kit  -->


    <!--   Big container   -->
    <div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">

            <!-- Wizard container -->
      

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form action="" method="">
                        <!-- You can switch 'data-color="orange"' with one of the next bright colors: "blue", "green", "orange", "red" -->

                        <div class="wizard-header">
                            <h3>
                                <b>DATOS PERSONALES</b><br>
                                <!-- <small>This information will let us know more about you.</small> -->
                            </h3>
                        </div>

                        <div class="wizard-navigation">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#about" data-toggle="tab">Informacion del Tutor</a></li>
                                <li class="nav-item"><a class="nav-link" href="#account" data-toggle="tab">Informacion del Nino/Niña</a></li>
                                <li class="nav-item"><a class="nav-link" href="#address" data-toggle="tab">Direccion</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <div class="row">
                                    <h4 class="info-text">Información del Tutor</h4>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Nombre">Nombres<small>(required)</small></label>
                                            <input style="text-transform:uppercase" name="Nombres" id="Nombre" type="text" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="apellidoPaterno">Apellido Paterno <small>(required)</small></label>
                                            <input style="text-transform:uppercase" name="apellidoPaterno" id="apellidoPater" type="text" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="apellidoMaterno">Apellido Materno <small>(required)</small></label>
                                            <input style="text-transform:uppercase" name="apellidoMaterno" id="apellidoMater" type="text" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="edadTutor">Edad <small>(required)</small></label>
                                            <input name="edadTutor" id="edadTuto" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="parentesco_tutor">Parentesco <small>(requerido)</small></label>
                                            <select name="parentesco" id="parentesco_tutor" class="form-control">
                                                <option value="">Seleccione el parentesco</option>
                                                <option value="padre">Padre</option>
                                                <option value="madre">Madre</option>
                                                <option value="hermano">Hermano/a</option>
                                                <option value="abuelo">Abuelo/a</option>
                                                <option value="tio">Tío/a</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane" id="account">
                                <h4 class="info-text">Informacion del Niño/Niña</h4>

                             
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="Nombre_menor">Nombres<small>(required)</small></label>
                                        <input style="text-transform:uppercase" name="NombresMenor" id="Nombre_menor" type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="apellidoPaterMenor">Apellido Paterno <small>(required)</small></label>
                                        <input style="text-transform:uppercase" name="apellidoPaternoMenor" id="apellidoPaterMenor" type="text" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="apellidoMaterno_Menor">Apellido Materno <small>(required)</small></label>
                                        <input style="text-transform:uppercase" name="apellidoMaternoMenor" id="apellidoMaterno_Menor" type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="edad_Menor">Edad<small>(required)</small></label>
                                        <input name="edadmenor" id="edad_Menor" type="text" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="sexo_Menor">Sexo <small>(requerido)</small></label>
                                        <select name="sexoMenor" id="sexo_Menor" class="form-control">
                                            <option value="">Seleccione un Sexo</option>
                                            <option value="Niño">Niño</option>
                                            <option value="Niña">Niña</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="address">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text">Agrega tu direccion</h4>
                                    </div>

                                    <div class="col-lg-12" style="padding-top: 8px;">
                                        <div class="card">
                                            <div class="card-header">
                                                DIRECCION
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                        <label for="">Departamento:</label>
                                                        <input type="text" class="js-example-basic-single" name="state" id="sel_departamento" style="width:100%">
  
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="sel_provincia">Provincia:</label>
                                                            <select class="form-control js-example-basic-single" name="state" id="sel_provincia" style="width: 100%"></select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="sel_distrito">Distrito:</label>
                                                            <select class="form-control js-example-basic-single" name="state" id="sel_distrito" style="width: 100%"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" id="id_usuarioCP" value="<?php echo $_SESSION['usuario']?>"> 
                                </div>
                            </div>
                        </div>

                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">
                                <input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm" name="next" value="Next" />
                                <input type="button" class="btn btn-finish btn-fill btn-warning btn-wd btn-sm" onclick="addRecordAndGuardar()" name="finish" value="Finish" />
                            </div>

                            <div class="pull-left">
                                <input type="button" class="btn btn-previous btn-fill btn-default btn-wd btn-sm" name="previous" value="Previous" />
                            </div>
                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
    </div><!-- end row -->
</div> <!-- big container -->

<script>
  function addRecordAndGuardar() {

    guardar();
  }
</script>
</body>

	<!--   Core JS Files   -->
	<script src="assetscp/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assetscp/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assetscp/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
    
        <!-- Codigo para validar ----->
        <script type="text/javascript" src="jsf/validacion.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->

	<script src="assetscp/js/jquery.validate.min.js"></script>
     <!-- Guardar Datos ----->
  

</html>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   
    <title>SELECT ANIDADO</title>
  </head>
  <body>
      
  </body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="jscp/console_ubigeo4.js"></script>
    <script>
    // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            listar_departamento();
        
        });

        $("#sel_departamento").change(function(){
            var iddepartamento = $("#sel_departamento").val();
            listar_pronvincia(iddepartamento);
        })

        $("#sel_provincia").change(function(){
            var idprovincia = $("#sel_provincia").val();
            listar_distrito(idprovincia);
        })
    </script>

<!-- Bootstrap JS file --> 
<!-- Custom JS file --> 
