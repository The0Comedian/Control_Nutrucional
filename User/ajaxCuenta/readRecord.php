<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							
							<th>Nombre</th>
							<th>Usuario</th>
							
							<th>Contraseña</th>
							<th></th>
						</tr>';

						session_start(); 
						$usuario=$_SESSION['usuario'];
						
						
	$query = "SELECT * FROM userlocal WHERE usuario='$usuario'";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
			
				<td>'.$row['Nombre'].'</td>
				<td>'.$row['usuario'].'</td>
			
				<td><input  disabled type="password" name="contraseña" value='.$row['Contraseña'].'></td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Actualizar<i class="fas fa-edit"></i></button>
				</td>
			
    		</tr>';
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