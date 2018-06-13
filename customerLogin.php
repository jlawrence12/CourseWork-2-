<?php
//Connect to database
require 'vendor/autoload.php';

//start session
session_start();

//sanitize email
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

$password = $_POST['password'];

//connect to client
$client = new MongoDB\Client("mongodb://localhost:27017");

$collection = $client->peach->customers;

$credentials = $collection->findOne(['email' => $email]);

//Check if credentials match and display results in js
if(!empty($credentials)){ 
	 if($credentials['password'] = $password){
		$_SESSION['customerID'] = $credentials;
		$_SESSION['firstName'] = $credentials['name']['firstname'];
		echo json_encode(['result' => 'successful']); 
		exit;
	} else { 
		echo json_encode(['result' => 'incorrect']); 
		exit;
	}
} else { 
		echo json_encode(['result' => 'incorrect']);
		exit;
	}

?>