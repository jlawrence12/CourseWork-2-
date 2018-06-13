<?php
//Connect to database
require 'vendor/autoload.php';

//Select a client
$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection 
$collection = $client->peach->headphones;

//Sanitize the barcode of a product
$barCode = filter_var($_POST['barcode'], FILTER_SANITIZE_STRING);

//delete the barcode of a product
$remove = $collection->deleteOne(['barcode' => $barCode]);

//Display in result in js
if ($remove->getDeletedCount() == 1) { 
	echo json_encode(['result' => 'success']); 
	exit();
} else { 
	echo json_encode(['result' => 'error']); 
	exit();
}

?>