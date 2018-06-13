<?php
//Connect to database
require 'vendor/autoload.php';
//Select a client 
$client = new MongoDB\Client("mongodb://localhost:27017");

//Select a collection
$collection = $client->peach->customers;

//Extract the data that was sent to the server
$firstName= filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
$surName= filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$number= filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$dob= filter_input(INPUT_POST, 'datepicker', FILTER_SANITIZE_STRING);
$address1= filter_input(INPUT_POST, 'address1', FILTER_SANITIZE_STRING);
$address2= filter_input(INPUT_POST, 'address2', FILTER_SANITIZE_STRING);
$city= filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
$postCode= filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$confirmPassword = filter_input(INPUT_POST, 'confirmpassword', FILTER_SANITIZE_STRING);

//Convert to PHP array
$customersArray = $collection->insertOne(
[
    "firstname" => $firstName, 
    "surname" => $surName,
    "email" => $email,
    "number" => $number, 
    "datepicker" => $dob, 
    "address1" => $address1, 
    "address2" => $address2,
    "city" => $city, 
    "postcode" => $postCode,  
    "confirmpassword" => $confirmPassword,
    "password" => $password

 ]);

//Refresh the page 
header('Location: index.php'); 

?>
