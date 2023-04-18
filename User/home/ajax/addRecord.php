<?php
	if(isset($_POST['id_usuario']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$id_usuario = $_POST['id_usuario'];
		$talla = $_POST['talla'];
		$peso = $_POST['peso'];
		$edad2 = $_POST['edad2'];
	

		$query = "INSERT INTO tallapeso(id_usuario, talla, peso, edad, fecha) VALUES('$id_usuario', '$talla', '$peso', '$edad2', now())";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>