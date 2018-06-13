<?php
//Connect to database
require 'vendor/autoload.php';

$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection 
$collection = $client->peach->headphones;

$barCode = filter_var($_POST['barcode'], FILTER_SANITIZE_STRING);

$entry = $collection->findOne(['barcode' => $barCode]);

foreach ($entry as $barCode => $value){
	echo "$barcode: ";
	var_dump($value);
}