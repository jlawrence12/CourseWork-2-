<!--  Author: Jovanie Lawrence
   Date: 13/04/18    
   Description: This source code gives a confirmation message that the purchase was successful . -->
<!-- import php file to display navbar -->
<?php
   //Connect to client and collection
   require 'vendor/autoload.php'; 
   $client = new MongoDB\Client("mongodb://localhost:27017"); 
   $collection = $client->peach->customers;
   //Find data in collection
   $result = $collection->findOne();
   ?>
<!DOCTYPE html> 
<html>
   <head>
      <link rel='shortcut icon' href='Media/peach.png'>
      <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
      <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src='Javascript/jquery-3.1.1.min.js'> </script>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
      <script src='Javascript/bootstrap.min.js'> </script>
      <script src='Javascript/jquery.md5.js'> </script>
      <script src='Javascript/index.js'> </script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel='stylesheet' type='text/css' href='css/StyleSheet.css'>
   </head>
   <?php require 'navBar.php'; ?>
   <!-- Page title -->
   <title> Confirmation | Peach </title>
   <!-- Page content -->
   <body>
      <div id="confirm" class="container">
         <div class="container">
            <img alt="Brand" src="Media/tick.png" height="170px" id="tick">
            <!-- text is type 'success' to ensure green text -->
            <h2 class='text-success'> Thank you for Your purchase </h2>
         </div>
      </div>
      <div id="content" class="container">
         <!--    Table to display customer information    -->
         <table class="table table-striped">
            <!--        Column Headings        -->
            <thead>
               <tr>
                  <th>Confirmation</th>
               </tr>
            </thead>
            <!--       Table Data         -->
            <tbody>
               <tr>
                  <td>
                     <strong> Order Number: </strong> 1000 <br> 
                     <strong> Delivery Address </strong> 
                     <p>
                        <?php echo $result['firstname'] . " " . $result['surname']; ?> <br>
                        <?php echo $result['address2']; ?> <br>
                        <?php echo $result['city']; ?> <br>
                        <?php echo $result['postcode']; ?>
                     </p>
                  </td>
               </tr>
            </tbody>
         </table>
         <!-- Button is linked to the products page for users who would like to buy more products.-->
         <a href="products.php"><button type="button" class="btn btn-success pull-right"> Continue Shopping</button></a>
      </div>
      </div>
   </body>
   <!-- Website footer -->
</html>