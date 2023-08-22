<div class="scroll_vertical">
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
							<th>Eliminar</th>
							
						</tr>';
						session_start(); 
						$usuario=$_SESSION['usuario'];
						
						
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
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">
					<i class="bi bi-trash"></i>
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
</div>
<style type="text/css">
div.scroll_vertical {
	height: 300px;
	width: 1100px;
	overflow: auto;
	border: 1px solid #666;
	/*background-color: #ccc;*/
	padding: 8px;
}
