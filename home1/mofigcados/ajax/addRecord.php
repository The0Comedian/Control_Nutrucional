<?php
	if(isset($_POST['id_users']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$id_users = $_POST['id_users'];
	
		

		$query = "INSERT INTO infousers(id_users ) VALUES('$id_users'";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>