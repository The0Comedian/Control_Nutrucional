<?php
	if(isset($_POST['nombre']) && isset($_POST['apelli_paterno']) && isset($_POST['obs']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$nombre = $_POST['nombre'];
		$apelli_paterno = $_POST['apelli_paterno'];
		$apelli_Materno = $_POST['apelli_Materno'];
		$sexo = $_POST['sexo'];
		$obs = $_POST['obs'];
		$fecha_Nacimiento = $_POST['fecha_Nacimiento'];
		$edads = $_POST['edads'];
		//$obs = strtoupper($_POST['obs']);

		$query = "INSERT INTO misdatos(id_usuario, nombre, apelli_Paterno, apelli_Materno, sexo, fecha_nacimiento, edad) VALUES('$obs','$nombre', '$apelli_paterno', '$apelli_Materno', '$sexo', '$fecha_Nacimiento', '$edads')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>