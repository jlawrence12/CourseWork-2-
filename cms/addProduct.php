<?php
//Connect to database
require 'vendor/autoload.php';

//Select a client
$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection 
$collection = $client->peach->headphones;

//Extract the data that was sent to the server
$barcode =  filter_var($_POST['barcode'], FILTER_SANITIZE_STRING);
$artwork =  filter_var($_POST['artwork'], FILTER_SANITIZE_STRING);
$keywords = filter_var($_POST['keywords'], FILTER_SANITIZE_STRING);
$brand = filter_var($_POST['brand'], FILTER_SANITIZE_STRING);
$model = filter_var($_POST['model'], FILTER_SANITIZE_STRING);
$colour = filter_var($_POST['colour'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT);
$stock = filter_var($_POST['stock'], FILTER_SANITIZE_NUMBER_INT);
$video = filter_var($_POST['video'], FILTER_SANITIZE_URL);

//Convert to PHP array
$productUpdate = $collection->insertOne(
	['artwork' => $artwork,
	 'keywords' => $keywords,
	 'barcode' => $barcode,
	 'brand' => $brand,
	 'model' => $model,
	 'colour' => $colour,
	 'price' => $price,
	 'stock' => $stock,
	 'video' => $video ]);

//Refresh the page
  header('Location: products.php'); 

?>