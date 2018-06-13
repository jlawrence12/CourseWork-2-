<!--  Author: Jovanie Lawrence
  Date: 13/04/18     
   Description: The checkout page gives a summary of the customers orders, address and price  -->
<!-- import php file to display navbar -->
<?php
//Connect to MongoDB
require 'vendor/autoload.php'; 
//Select a client 
$client = new MongoDB\Client("mongodb://localhost:27017"); 
//Select a colletion
$collection = $client->peach->customers;
//search for data customer in the collection
$result = $collection->findOne();
?>
<!DOCTYPE html> 
    <html>
        <head>
            <!-- import external pages -->
            <link rel='shortcut icon' href='Media/peach.png'>
            <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
            <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src='Javascript/jquery-3.1.1.min.js'> </script>
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
            <script src='Javascript/bootstrap.min.js'> </script>
            <script src='Javascript/customerLogin.js'> </script>
            <script src='Javascript/jquery.md5.js'> </script>
            <script src='Javascript/index.js'> </script>
            <script src='basket.js'> </script>
            <link rel='stylesheet' type='text/css' href='css/StyleSheet.css'>
        </head>
<?php require 'navBar.php'; ?>
<title> Check Out | Peach </title>
<body>
   <!-- Page content -->
   <div id="content" class="container">
      <div class="container">
         <h1 class="text-center">Checkout</h1>
         <div class="row">
            <div class="col-md-9">
                <!-- Display customer name and address -->
                <strong>Delivery Address:</strong><br>
                <p>
                      <?php echo $result['firstname'] . " " . $result['surname']; ?> <br>
                      <?php echo $result['address2']; ?> <br>
                      <?php echo $result['city']; ?> <br>
                      <?php echo $result['postcode']; ?>
                </p>
            </div>
         </div>
      </div>

      <!-- Order Summary Table -->
      <div class="container">
         <table class="table table-striped table-vert-middle">
            <!--        Column Headings        -->
            <thead>
               <tr>
                  <th class="text-left">Headphone</th>
                  <th class="text-center">Barcode</th>
                  <th class="text-center">Brand</th>
                  <th class="text-center">Quantity</th>
                  <th class="text-center">Unit Price</th>
               </tr>
            </thead>
            <!--       Table Data         -->
            <tbody >
            <div class="col-md-3" id="basketDiv">

            </div>
            <?php
            $prodIDs = $_POST['prodIDs'];
            //Convert JSON string to PHP array 
            $productArray = json_decode($prodIDs, true);
            //Output the IDs of the products that the customer has ordered
            for($i=0; $i<count($productArray); $i++){
                echo '<p> Product ID: ' . $productArray[$i]['id'] . '. Count: ' . $productArray[$i]['count'] . '</p>';
            }
            ?>
            </tbody>
         </table>
         <a href="confirm.php"><button type="button" class="btn btn-success pull-right">Buy now</button></a>
      </div>
   </div>
</body>
<!-- import modals for functionality -->
<?php require 'modals.php';?>
</html>