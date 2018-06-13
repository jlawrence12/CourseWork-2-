<!--  Author: Jovanie Lawrence
   Date: 13/04/18    
   Description: This source code will find products that the user search for. -->
<!-- import php file to display navbar -->
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
      <script src='Javascript/jquery.md5.js'> </script>
      <script src='Javascript/index.js'> </script>
      <script src='Javascript/recommender.js'> </script>
      <script src='basket.js'> </script>
      <script src='Javascript/customerLogin.js'> </script>
      <script>
         function changeResultSort(){
            location.reload();
         }
      </script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel='stylesheet' type='text/css' href='css/StyleSheet.css'>
   </head>
   <?php require 'navBar.php'; ?>
   <title> Search results | Peach </title>
   <body>
      <!-- Page content -->
      <div id="content" class="container">
      <div class="container">
      <!-- Top Title Box -->
      <div class="well well-sm titleBar">
         <h2>Search Results</h2>
         <div class="text-right">
            <?php $sortBy = filter_input(INPUT_GET,'sort', FILTER_SANITIZE_STRING);?>
            <strong>Sort By:</strong>
            <select id="sortBy" onchange="changeResultSort()">
               <option value="brand" <?php if ($sortBy == "brand") echo "selected";?>>Brand: A-Z </option>
               <option value="priceLToH" <?php if ($sortBy == "priceLToH") echo "selected";?>>Price: Low to High</option>
               <option value="priceHToL" <?php if ($sortBy == "priceHToL") echo "selected";?>>Price: High to Low</option>
            </select>
         </div>
      </div>
      <h3 align="center">Recommendations</h3>
      <div id="RecomendationDiv" align="center"></div>
      <!-- Product Grid -->
      <div id="products" class="row">
      <?php 

         //Connect to database
         require 'vendor/autoload.php';
         
         //Sort price depending on selection
         if($sortBy == "priceLtoH") {
             $sortParam = ['sort'=>['price'=>1]];
          }elseif($sortBy == "priceHtoL") {
             $sortParam = ['sort'=>['price'=>-1]];
           }else{
            $sortParam = [];
           }
               //Select a client
               $client = new MongoDB\Client("mongodb://localhost:27017");
            
               //Select a collection
               $collection = $client->peach;
         
               //Extract the data that was sent to the server
               $search_string = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
         
               //Create a PHP array with our search criteria
               $findCriteria = ['$text' => [ '$search' => $search_string ]];
         
               $cursor = $collection->headphones->find($findCriteria, $sortParam); 
                $searchResults = false;
         
               //Output the results suing foreach loop
                foreach ($cursor as $entry) {
                  $searchResults = true;
         
                  //Transfom the price into nice format
                  $price =  $entry['price'];
                  $price = $price/100;
                  $price = number_format((float)$price, 2, '.', '');
                  echo 
                  "<div class='item col-md-4'>
                     <div class='thumbnail'>
                        <img class='group' src='./". $entry['artwork'] . "' width='150px' />
                        <div class='caption'>
                           <h4 class='group inner list-group-item-heading'><strong> ". $entry['brand'] . "</strong></h4>
                           <p class='group inner list-group-item-text'> ". $entry['model'] . " Wireless Headphones, you can go without wires and enjoy adaptive noise cancellation. </p>
                           <div class='row'>
                              <div class='col-md-4'>
                                 <p><strong> £$price </strong></p>
                              </div>
                              <div class='col-md-4'>
                                 <a class='btn btn-success btn-sm' href='#' data-toggle='modal' data-target='#beatsCartModal' id='add' 
                                 onclick=\'addToBasket(' " . $entry['_id'] . ", ". $entry['brand'] . ")\'>
                                 Add to Basket</a>
                              </div>
                              <div class='col-md-4'>
                                 <a class='btn btn-info btn-sm' href='' data-toggle='modal' data-target='#beatsInfoModal'>More Info</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         </div>";
         }

         //display if no keyword match
         if(!$searchResults){
         echo "<p class='error text-danger'><strong>Sorry, No Results Found</strong></p>";
         } 
         
         ?>
      <!-- import modals for functionality -->
      <?php require 'modals.php';?>
   </body>
   <!-- Website footer -->
</html>