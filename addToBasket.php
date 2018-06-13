
<?php
require 'vendor/autoload.php';

//Start session management
session_start();

//Connect to MongoDB and select database
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->peach;

//Create a basket document if we do not have one
if(!array_key_exists("basket_id", $_SESSION) ){
    //Add an empty basket 
    $dataArray = ["products" => []];
    $returnVal = $collection->baskets->insert($dataArray);

    //Check result 
    if($returnVal['ok'] != 1){
        throw new Exception("Error adding empty basket to MongoDB");
    }

    //Store basket ID in session key
    $_SESSION['basket_id'] = (string)$dataArray['_id'];
}

//Request for basket
if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    //Find basket with specified ID
    $findCriteria["_id"] = new MongoId($_SESSION['basket_id']);
    $basketCursor = $collection->baskets->find($findCriteria);

    //Check that we have found exactly one basket
    $numResults = $basketCursor->count();//Number of products in database 
    if($numResults == 0){
        throw new Exception("Basket not found");
    }

    //Get basket from basket cursor
    $basket = $basketCursor->next();

    //Return product in JSON format
    echo json_encode($basket);//Convert PHP representation of product into JSON 
}
//Modified basket has been sent to server
else if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Get JSON document containing basket from POST
    $basketJSON = $_POST['json'];

    //Convert JSON string to PHP  array. 'true' converts to array instead of PHP object.
    $basketPHPArray = json_decode($basketJSON, true);

    //Add ID field to basket array
    $basketPHPArray['_id'] = new MongoId($_SESSION['basket_id']);

    //#FIXME# CHECK THAT PRODUCTS ARE IN STOCK!

    //#FIXME# MERGE QUANTITIES OF PRODUCTS WITH THE SAME ID

    //#FIXME# MOVE REQUIRED NUMBER OF GOODS FROM PRODUCTS COLLECTION TO BASKET COLLECTION

    //Save the product in the database - it will overwrite the data for the basket with this ID
    $returnVal = $collection->baskets->save($basketPHPArray);
    if($returnVal['ok'] != 1){
        throw new Exception("Error updating MongoDB basket.");
    }
    //Basket updated successfully
    echo 'ok';
}
else{
    throw new Exception("Request method not recognized.");
}

?>