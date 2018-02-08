<!--  Author: Jovanie Lawrence
      Date: 08/02/18    
      Description: Home page source code. -->

<!-- import php file to display navbar -->
<?php require 'navBar.php'; ?>
<!-- Title page name -->
<title> Home | Peach </title>
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
               <img src="http://placehold.it/1300x315" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x315" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x315" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x315" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x315" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4 >
               </div>
            </div>
         </div>
         <!-- Left and right controls for slides -->
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
   <!-- Include images of brands we sell -->
   <div class="brand">
      <a href="products.php"> <button type="button" class="btn btn btn-sm"> <img src="Media/beats-logo.png" height="70px" width="150px"> </button> </a> 
      <a href="products.php"> <button type="button" class="btn btn btn-sm"> <img src="Media/bose-logo.png" height="70px" width="150px"> </button> </a> 
      <a href="products.php"> <button type="button" class="btn btn btn-sm"> <img src="Media/sony-logo.png" height="70px" width="150px"> </button> </a>  <br> <br>
      <a href="products.php"> <button type="button" class="btn btn btn-sm"> <img src="Media/philips-logo.png" height="70px" width="150px"> </button> </a> 
      <a href="products.php"> <button type="button" class="btn btn btn-sm"> <img src="Media/bowse-logo.png" height="70px" width="150px"> </button> </a> 
      <a href="products.php"> <button type="button" class="btn btn btn-sm"> <img src="Media/jbl-logo.png" height="70px" width="150px" > </button> </a> 
   </div>

   <!-- import php file that gives access to code for modals -->
   <?php require 'modals.php';?>
</body>

<!-- Footer  -->
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
<p id='built-by' class='navbar-text'> &copy; J Lawrence</p>
</html>