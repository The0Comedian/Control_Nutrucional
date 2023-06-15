<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							
							<th>Vacuna</th>
							<th>Dosis</th>
							<th>Edad</th>
							<th>Fecha</th>
							<th>Eliminar</th>
						</tr>';
						session_start(); 
						$usuario=$_SESSION['usuario'];
						
						
	$query = "SELECT * FROM vacunas WHERE id_usuarioVa='$usuario'";

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
			
				<td>'.$row['vacuna'].'</td>
				<td>'.$row['dosis'].'</td>
				<td>'.$row['edad'].'</td>
				
				<td>'.$row['Fecha'].'</td>
				
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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