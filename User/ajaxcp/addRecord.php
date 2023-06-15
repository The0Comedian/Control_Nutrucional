<?php
	if(isset($_POST['iddepartamento']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$iddepartamento = $_POST['iddepartamento'];
		$idprovincia = $_POST['idprovincia'];
		$idlocalidad = $_POST['idlocalidad'];
		$Nombre  = strtoupper ($_POST['Nombre']);
		$apellidoPater  = strtoupper ($_POST['apellidoPater']);
		$apellidoMater  = strtoupper ($_POST['apellidoMater']);
		$edadTuto  = strtoupper ($_POST['edadTuto']);
		$parentesco_tutor  = strtoupper ($_POST['parentesco_tutor']);
		$Nombre_menor  = strtoupper ($_POST['Nombre_menor']);
		$apellidoPaterMenor  = strtoupper ($_POST['apellidoPaterMenor']);
		$apellidoMaterno_Menor  = strtoupper ($_POST['apellidoMaterno_Menor']);
		$edad_Menor  = strtoupper ($_POST['edad_Menor']);
		$sexo_Menor  = strtoupper ($_POST['sexo_Menor']);
		$id_usuarioCP  = strtoupper ($_POST['id_usuarioCP']);

		$query = "INSERT INTO misdatos (Nombre, apelli_Paterno, apelli_Materno, edadtutor, parentesco_tutor, Nombre_menor, apellidoPater_menor, apellidoMaterno_Menor,  edad_Menor, sexo	, cp, municipio, localidad, id_usuario) VALUES('$Nombre','$apellidoPater', '$apellidoMater', '$edadTuto',  '$parentesco_tutor', '$Nombre_menor', '$apellidoPaterMenor', '$apellidoMaterno_Menor', '$edad_Menor', '$sexo_Menor', '$iddepartamento', '$idprovincia', '$idlocalidad', '$id_usuarioCP' )";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>