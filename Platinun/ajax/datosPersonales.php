<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						
						</tr>';
				
						$usuario = $_GET['usuario'];
	
						// get user details from database based on id
						$query = "SELECT * FROM misdatos WHERE id_usuario = '$usuario'";


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
        <h4>Datos del Personales</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre </label>
              <input type="text" class="form-control" id="firstName" value="'.$row['nombre'].'" required disabled>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido Paterno</label>
              <input type="text" class="form-control" id="lastName"  value="'.$row['apelli_Paterno'].'" required disabled>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>
            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido Materno</label>
              <input type="text" class="form-control" id="lastName"  value="'.$row['apelli_Materno'].'" required disabled>
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
    	$data .= '<tr><td colspan="6">No hay registros de datos Personales!</td></tr>';
    }

    $data .= '</table>';

    echo $data;



?>