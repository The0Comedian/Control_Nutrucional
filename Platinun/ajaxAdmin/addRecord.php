<?php
	if(isset($_POST['Nombre']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$Nombre = $_POST['Nombre'];
		$Usuario = $_POST['Usuario'];
		$Contraseña = $_POST['Contraseña'];
		$t_usuario = $_POST['t_usuario'];


		$query = "INSERT INTO userlocal(Nombre, usuario, Contraseña, t_usuario, fecha) VALUES('$Nombre', '$Usuario', '$Contraseña', '$t_usuario', now())";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>