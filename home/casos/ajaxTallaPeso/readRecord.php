<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Talla</th>
							<th>Peso</th>
							<th>Edad</th>
							<th>Fecha</th>
							
						</tr>';
						session_start(); 
						$usuario=$_SESSION['user_email_address'];	
						
						
$query = "SELECT * FROM tallapeso WHERE id_usuario='$usuario'";


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
				<td>'.$number.'</td>
						
				
				<td>'.$row['talla'].'</td>
				<td>'.$row['peso'].'</td>
				<td>'.$row['edad'].'</td>
				<td>'.$row['fecha'].'</td>
				
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