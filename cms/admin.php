<?php
//Connect to database
require 'vendor/autoload.php';

session_start();

//Extract the data that was sent to the server
$email = filter_var($_POST['adminEmail'], FILTER_SANITIZE_EMAIL);
$password = $_POST['adminPassword'];

//Connect to client
$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection in the database
$collection = $client->peach->admin;

//Find value in server and store in a variable 
$credentials = $collection->findOne(['adminEmail' => $email]);

//Check if credentials match and display results in js
if (!empty($credentials)) { 
	 if($credentials['adminPassword'] = $password){
		$_SESSION['adminID'] = $credentials;
		echo json_encode(['result' => 'successfulLogin']); 
		exit;
	} else { 
		echo json_encode(['result' => 'incorrectCredentials']); 
		exit;
	}
} else { 
		echo json_encode(['result' => 'incorrectCredentials']);
		exit;
	}

?>