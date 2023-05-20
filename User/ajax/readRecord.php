<link rel="stylesheet" href="ajax/estilos.css">
<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<form">
						<tr>
						<th ></th>
						<th></th>
						<th></th>
						<th></th>
						</tr>';

						session_start(); 
						$usuario=$_SESSION['usuario'];
						
						
	$query = "SELECT * FROM misdatos WHERE id_usuario='$usuario'";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
			$data .= '<div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control text-center" id="nombre" value="'.$row['nombre'].'" readonly>
              </div>
              <div class="form-group">
                <label for="apellido-paterno">Apellido Paterno</label>
                <input type="text" class="form-control text-center" id="apellido-paterno" value="'.$row['apelli_Paterno'].'" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="apellido-materno">Apellido Materno</label>
                <input type="text" class="form-control text-center" id="apellido-materno" value="'.$row['apelli_Materno'].'" readonly>
              </div>
              <div class="form-group">
                <label for="fecha-nacimiento">Fecha de Nacimiento</label>
                <input type="text" class="form-control text-center" id="fecha-nacimiento" value="'.$row['fecha_nacimiento'].'" readonly>
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control text-center" id="edad" value="'.$row['edad'].'" readonly>
              </div>
            </div>
          </div>';

    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6"></td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>