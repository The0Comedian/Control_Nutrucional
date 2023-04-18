<?php
	if(isset($_POST['Nombre']) && isset($_POST['Contraseña']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$Nombre = $_POST['Nombre'];
		$Usuario = $_POST['Usuario'];
		$Contraseña = $_POST['Contraseña'];
		
		//$obs = strtoupper($_POST['obs']);

		$query = "INSERT INTO userlocal(Nombre, Usuario, Contraseña, Fecha) VALUES('$Nombre', '$Usuario', '$Contraseña', now())";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>