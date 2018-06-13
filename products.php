<!--  Author: Jovanie Lawrence
   Date: 13/04/18    
   Description: This page users can view the products and add to their baskets to purchase. -->
<!-- import php file to display navbar -->
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
      <script src='Javascript/customerLogin.js'> </script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel='stylesheet' type='text/css' href='css/StyleSheet.css'>
   </head>
   <?php require 'navBar.php'; ?>
   <title> Products| Peach </title>
   <body>
      <!-- Carousel slider indicators -->
      <div class="col-lg">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               <li data-target="#myCarousel" data-slide-to="3"></li>
               <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>
            <!-- Wrapper for slides on the carousel -->
            <div class="carousel-inner">
               <div class="item active">
                  <!-- Placeholders to appear on the carousel when images are not present -->
                  <img src="http://placehold.it/1400x300" alt="...">
                  <div class="carousel-caption">
                     <h4>Caption Text</h4>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/1400x300" alt="...">
                  <div class="carousel-caption">
                     <h4>Caption Text</h4>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/1400x300" alt="...">
                  <div class="carousel-caption">
                     <h4>Caption Text</h4>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/1400x300" alt="...">
                  <div class="carousel-caption">
                     <h4>Caption Text</h4>
                  </div>
               </div>
               <div class="item">
                  <img src="http://placehold.it/1400x300" alt="...">
                  <div class="carousel-caption">
                     <h4>Caption Text</h4 >
                  </div>
               </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <br>
      <?php 
         require 'vendor/autoload.php';
            $client = new MongoDB\Client("mongodb://localhost:27017");
         
            $collection = $client->peach->headphones;
         
            //Find the products in the collectio annd sort them 
            $result = $collection->find([], ['sort' => ['details.brand' => 1]]); 
            foreach ($result as $entry) {
         
         echo      
         "<div class='col-lg-9'>
            <div class='row'>
             <div class='col-lg-4 col-md-6 mb-4'>
               <div class='card h-100'>
                  <img class='card-img-top' src='./". $entry['artwork'] ."' width='250' height='250' alt=''>
                  <div class='card-body'>
                     <h4 class='card-title'>
                        <a href='#' data-toggle='modal' data-target='#beatsInfoModal'>". $entry['brand'] ."</a>
                     </h4>
                     <!-- Price of the product -->
                     <h5> <strong>". $entry['price'] ."</strong> </h5>
                     <!--   Buttons for functionality -->
                     <div class='container'>          
                        <a href='#' data-toggle='modal' data-target='#beatsCartModal'><button type='button' class='btn btn-info btn-sm'>Add to Basket</button> </a>
                        <a href='#' data-toggle='modal' data-target='#beatsInfoModal'><button type='button' class='btn btn-info btn-sm'> More Info </button> </a>     
                     </div>
                  </div>
                  <div class='card-footer'>
                  </div>
               </div>
            </div>
         </div>
         </div>";} 
         ?>
      <!-- import modals for functionality -->
      <?php require 'modals.php';?>
   </body>
</html>