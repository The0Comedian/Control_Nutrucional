<?php
	if(isset($_POST['vacuna']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$vacuna = $_POST['vacuna'];
		$dosis = $_POST['dosis'];
		$edadVacuna = $_POST['edadVacuna'];
		$id_usuarioVacunas = $_POST['id_usuarioVacunas'];
	

		$query = "INSERT INTO vacunas (vacuna, dosis, edad, Fecha, id_usuarioVa) VALUES('$vacuna', '$dosis', '$edadVacuna', now(), '$id_usuarioVacunas')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>