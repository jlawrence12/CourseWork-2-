<!DOCTYPE html> 
    <html>
        <head>
           <title> Home | Peach </title>
    
            <link rel='shortcut icon' href='peach.png'>
    
            <link rel='stylesheet' type='text/css' href='bootstrap.min.css'>
    
            <link rel='stylesheet' type='text/css' href='bootstrap.css'>

            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

            <script src='jquery-3.1.1.min.js'> </script>
            
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
    
            <script src='bootstrap.min.js'> </script>

            <script src='jquery.md5.js'> </script>

            <script src='index.js'> </script>

            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
            <link rel='stylesheet' type='text/css' href='StyleSheet.css'>
        
        </head>
    
    <body>
        <?php require 'navBar.php'; ?>
  <div class="col-lg">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>

  </ol>

  <!-- Wrapper for slides -->
 <div class="carousel-inner">
                        <div class="item active">
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

<div class="col-lg-9">
  <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="beats.png" width="250" height="250" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Beats</a>
                  </h4>
                  <h5> <strong> £199.99 </strong> </h5>
                  <div class="container">          
                    <a href='#' data-toggle='modal' data-target='#beatsCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>

                    <a href='#' data-toggle='modal' data-target='#beatsInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="bose.png" width="250" height="250" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"> Bose </a>
                  </h4>
                   <h5> <strong> £329.95 </strong> </h5>
                  <div class="container">          
                    <a href='#' data-toggle='modal' data-target='#boseCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>

                    <a href='#' data-toggle='modal' data-target='#boseInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="bowse.png" width="250" height="250" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"> Bowse & Wilkins</a>
                  </h4>
                   <h5> <strong> £699.99 </strong> </h5>
                  <div class="container">          
                    <a href='#' data-toggle='modal' data-target='#bowseCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>

                    <a href='#' data-toggle='modal' data-target='#bowseInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>      
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div> 
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="jbl.png" width="250" height="250" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">JBL</a>
                  </h4>
                   <h5> <strong> £204.99 </strong> </h5>
                  <div class="container">          
                    <a href='#' data-toggle='modal' data-target='#jblCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>
                    <a href='#' data-toggle='modal' data-target='#jblInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="phil.png" width="250" height="250" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Phillips</a>
                  </h4>
                   <h5> <strong> £49.99 </strong> </h5>
                  <div class="container">          
                   <a href='#' data-toggle='modal' data-target="#philipsCartModal"> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>

                    <a href='#' data-toggle='modal' data-target='#philInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>     
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9734; &#9734;</small>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="sony.png" width="250" height="250" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Sony</a>
                  </h4>
                  <h5> <strong> £249.99 </strong> </h5>
                  <div class="container">          
                    <a href='#' data-toggle='modal' data-target='#sonyCartModal'> <button type="button" class="btn btn-info btn-sm">Add to Basket</button> </a>

                    <a href='#' data-toggle='modal' data-target='#sonyInfoModal'> <button type="button" class="btn btn-info btn-sm"> More Info </button> </a>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
          </div>


</div>

<?php require 'modals.php';?>

    </body>
</html>