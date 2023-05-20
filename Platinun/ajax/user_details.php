<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous"></head>
<link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>


<script src="dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/style.css">
<body>
<header> 
<nav class="navbar navbar-expand-md navbar-dark bg-dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mi empresa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 " id="nav">

             
              <li class="nav__item">
              <a class="nav-link"  href="../index.php">Regresar</a>
              </li>
            
               </ul>
      </div>
    </div>
  </nav>
</header>
<body>

<div class="container">
 <h3>Detalles </h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
	  <?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						
						</tr>';
				
						$usuario = $_GET['usuario'];
	
						// get user details from database based on id
						$query = "SELECT * FROM userlocal WHERE usuario = '$usuario'";


	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '

        <div class="col-md-7 col-lg-12">
        <h4>Datos de Usuario</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre </label>
              <input type="text" class="form-control" id="firstName" value="'.$row['Nombre'].'" required disabled>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="lastName"  value="'.$row['usuario'].'" required disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            </div>
        ';


				
    		
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">No hay registros!</td></tr>';
    }

    $data .= '</table>';

    echo $data;



?>
<?php include("datosPersonales.php"); ?>
<?php include("estadoNutri.php"); ?>
<div class="b-example-divider"></div>

<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
  <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="light">
    <nav class="col-lg-12">
    <?php include("graficaPeso.php"); ?>
    </nav>
    <div class="d-none d-lg-block vr mx-4 opacity-10">&nbsp;</div>
    <hr class="d-lg-none">
   
  </div>

<div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="light">
    <nav class="col-lg-12">
    <?php include("grafica.php"); ?>
    </nav>
   
</div>
</div>

</div>
</body>
</html>
<script src="../dist/js/bootstrap.min.js"></script> 

<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>