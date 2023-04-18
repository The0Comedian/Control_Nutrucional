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
    		$data .= '<tr class="bg-primary">
			</br>
		


  

  <div class="col-md-12">
           <div class="input-group flex-nowrap">
           <span class="input-group-text  bg-info" id="addon-wrapping">Nombre</span>
           <td><span class="input-group-text" id="basic-addon2">'.$row['nombre'].'</td></span></br>
           <span class="input-group-text bg-info" id="addon-wrapping">Apellido Paterno</span>
		   <td><span class="input-group-text" id="basic-addon2">'.$row['apelli_Paterno'].'</td></span></br>
          <span class="input-group-text bg-info" id="addon-wrapping">Apellido Materno</span>
		  <td><span class="input-group-text" id="basic-addon2">'.$row['apelli_Materno'].'</td></span></br>
		  <span class="input-group-text bg-info" id="addon-wrapping">Fecha de Nacimiento</span>
		  <td><span class="input-group-text" id="basic-addon2">'.$row['fecha_nacimiento'].'</td></span></br>
		  <span class="input-group-text bg-info" id="addon-wrapping">Edad</span>
		  <td><span class="input-group-text" id="basic-addon2">'.$row['edad'].'</td></span></br>
        </div>      
        </div>
</br>
			
		
			
    		</tr>';
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