<!--  Author: Jovanie Lawrence
   Date: 08/02/18    
   Description: This page users can view the products and add to their baskets to purchase. -->
<!-- import php file to display navbar -->
<?php require 'navBar.php'; ?>
<title> Main page to shop | Peach </title>
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
               <img src="http://placehold.it/1300x300" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x300" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x300" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x300" alt="...">
               <div class="carousel-caption">
                  <h4>Caption Text</h4>
               </div>
            </div>
            <div class="item">
               <img src="http://placehold.it/1300x300" alt="...">
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
   <!-- Cards which create a border box to separate the items we are selling -->
   <div class="col-lg-9">
      <div class="row">
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
            <!--           import image on card                 -->
               <a href="#"><img class="card-img-top" src="Media/beats.png" width="250" height="250" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title">
                     <a href='#' data-toggle='modal' data-target="#beatsInfoModal">Beats</a>
                  </h4>
                  <h5> <strong> £199.99 </strong> </h5>
                  <!--   Buttons for functionality -->
                  <div class="container">          
                     <a href='#' data-toggle='modal' data-target='#beatsCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                     <a href='#' data-toggle='modal' data-target='#beatsInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="Media/bose.png" width="250" height="250" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title">
                     <a href='#' data-toggle='modal' data-target="#boseInfoModal"> Bose </a>
                  </h4>
                  <h5> <strong> £329.95 </strong> </h5>
                  <div class="container">          
                     <a href='#' data-toggle='modal' data-target='#boseCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                     <a href='#' data-toggle='modal' data-target='#boseInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="Media/bowse.png" width="250" height="250" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title">
                     <a href='#' data-toggle='modal' data-target="#bowseInfoModal">Bowse & Wilkins</a>
                  </h4>
                  <h5> <strong> £699.99 </strong> </h5>
                  <div class="container">          
                     <a href='#' data-toggle='modal' data-target='#bowseCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                     <a href='#' data-toggle='modal' data-target='#bowseInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>      
                  </div>
               </div>
               <div class="card-footer">
                  <br>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="Media/jbl.png" width="250" height="250" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title">
                     <a href='#' data-toggle='modal' data-target="#jblInfoModal">JBL</a>
                  </h4>
                  <h5> <strong> £204.99 </strong> </h5>
                  <div class="container">          
                     <a href='#' data-toggle='modal' data-target='#jblCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                     <a href='#' data-toggle='modal' data-target='#jblInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="Media/phil.png" width="250" height="250" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title">
                     <a href='#' data-toggle='modal' data-target="#philInfoModal">Phillips</a>
                  </h4>
                  <h5> <strong> £49.99 </strong> </h5>
                  <div class="container">          
                     <a href='#' data-toggle='modal' data-target="#philipsCartModal"> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                     <a href='#' data-toggle='modal' data-target='#philInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
               <a href="#"><img class="card-img-top" src="Media/sony.png" width="250" height="250" alt=""></a>
               <div class="card-body">
                  <h4 class="card-title">
                     <a href='#' data-toggle='modal' data-target="#sonyInfoModal">Sony</a>
                  </h4>
                  <h5> <strong> £249.99 </strong> </h5>
                  <div class="container">          
                     <a href='#' data-toggle='modal' data-target='#sonyCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                     <a href='#' data-toggle='modal' data-target='#sonyInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>
                  </div>
               </div>
               <div class="card-footer">
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- import modals for functionality -->
   <?php require 'modals.php';?>
</body>

</html>
