<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
	$Usuario=$_POST['Usuario'];
    $Contraseña=$_POST['Contraseña'];

   
 


    // Updaste User details
    $query = "UPDATE userlocal SET usuario='$Usuario', Contraseña='$Contraseña' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}