<?php

//start session on web page


include('sesion.php');




//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('160071523066-s976tus01u5nct15sd4e831pra30qm6j.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/control_Nutrucional/home/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

$hostname = "localhost";
$username = "root";
$password = "";
$database = "nu-ni-12";

$conn = mysqli_connect($hostname, $username, $password, $database);
?>  