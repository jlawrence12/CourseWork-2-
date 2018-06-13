<?php
//Connect to database
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection 
$collection = $client->admin->adminLogin;

session_start();

if(isset($_POST['adminEmail']) & $_POST['adminEmail'] != ""){
	$email = filter_var($_POST['adminEmail'], FILTER_SANITIZE_EMAIL);
}

if(isset($_POST['adminPassword']) & $_POST['adminPassword'] != ""){
	$password = $_POST['adminPassword'];
}


?>