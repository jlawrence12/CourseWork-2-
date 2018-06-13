<?php
//Connect to database
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection 
$collection = $client->peach->headphones;

$brand =  filter_var($_POST['barcode'], FILTER_SANITIZE_STRING);

$remove = $collection->deleteOne(['barcode' => $barcode);

if ($remove->getDeletedCount() == 1) { 
	echo json_encode(['result' => 'success']); 
	exit();
} else { 
	echo json_encode(['result' => 'failure']);
	exit();
}


?>