<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped"	>


						<tr>
					
							<th>Nombre</th>
							<th>Inspecionar</th>
							
						</tr>';

	$query = "SELECT * FROM userlocal WHERE t_usuario IN (0)";


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

			<td style="color: black"><strong>Nombre: </strong>'.$row['Nombre'].'<br><strong>Usuario: </strong>'.$row['usuario'].'</td>';

		$data .= '<td>
		<a href="ajax/user_details.php?usuario=' . $row['usuario'] . '" class="btn btn-warning"><i class="bi bi-bar-chart-line"></i></a></td>
	
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