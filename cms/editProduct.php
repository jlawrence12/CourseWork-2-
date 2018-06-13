<?php
//Connect to database
require 'vendor/autoload.php';

	//Sanitize various details of a product
	//Extract the data that was sent to the server
	$barcode =  filter_var($_POST['barcode'], FILTER_SANITIZE_STRING);
	$newBarcode =  filter_var($_POST['newBarcode'], FILTER_SANITIZE_STRING);
	$brand =  filter_var($_POST['brand'], FILTER_SANITIZE_STRING);
	$model =  filter_var($_POST['model'], FILTER_SANITIZE_STRING);
	$colour =  filter_var($_POST['colour'], FILTER_SANITIZE_STRING);
	$price =  filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT);
	$stock =  filter_var($_POST['stock'], FILTER_SANITIZE_NUMBER_INT);
	$video = filter_var($_POST['video'], FILTER_SANITIZE_URL);

//Select a client 
$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection
$collection = $client->peach->headphones;

//Update old data with new data 
$productUpdate = $collection->updateOne(
	['barcode' => $barcode],
	['$set' =>[
	 // 'artwork' => $artwork,
	 'barcode' => $newBarcode,
	 'brand' => $brand,
	 'model' => $model,
	 'colour' => $colour,
	 'price' => $price,
	 'stock' => $stock,
	 'video' => $video ]]);

	//Output result in js
    echo json_encode(['result' => 'success']);
    exit();

?>