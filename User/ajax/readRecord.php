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
      <h3>DATOS DE TUTOR</h3>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control text-center" id="nombre" value="'.$row['Nombre'].'" readonly>
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
                <label for="edad">Edad</label>
                <input type="text" class="form-control text-center" id="edad" value="'.$row['edadtutor'].' años" readonly>
              </div>
              <div class="form-group">
              <label for="edad">Parentesco</label>
              <input type="text" class="form-control text-center" id="edad" value="'.$row['parentesco_tutor'].'" readonly>
            </div>
            </div>
            <h3>DATOS DEL MENOR </h3>
            <div class="col-md-6">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control text-center" id="nombre" value="'.$row['Nombre_menor'].'" readonly>
              </div>
              <div class="form-group">
                <label for="apellido-paterno">Apellido Paterno</label>
                <input type="text" class="form-control text-center" id="apellido-paterno" value="'.$row['apellidoPater_menor'].'" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="apellido-materno">Apellido Materno</label>
                <input type="text" class="form-control text-center" id="apellido-materno" value="'.$row['apellidoMaterno_Menor'].'" readonly>
              </div>
              <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control text-center" id="edad" value="'.$row['edad_Menor'].' años" readonly>
              </div>
              </div>
              <h3>DATOS DEL DOMICILIO </h3>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Municipio</label>
                  <input type="text" class="form-control text-center" id="nombre" value="'.$row['municipio'].'" readonly>
                </div>
                <div class="form-group">
                  <label for="apellido-paterno">Localidad</label>
                  <input type="text" class="form-control text-center" id="apellido-paterno" value="'.$row['localidad'].'" readonly>
                </div>
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