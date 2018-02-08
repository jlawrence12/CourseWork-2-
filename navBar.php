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

<?php require 'modals.php';?>
<nav class="navbar navbar-inverse navbar-fixed-top" style='background-color:#062029'>
    <header>
        <div class='container-fluid'>
            <div class='navbar-header'>
                <a href='#' class='d-inline-block align-top'> <img src=""> </a>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li><a href="products.php"> Products </a></li>
                    <li><a href="aboutUs.php"> About Us </a></li>
                    <li class='dropdown'>
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <span class="glyphicon glyphicon-menu-hamburger"> </span> Brand <span class='caret'></span></a>

                            <ul class='dropdown-menu'>
                                <li><a href='#' data-toggle='modal' data-target='#beatsInfoModal'> Beats</a></li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#boseInfoModal'> Bose </a></li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#bowseInfoModal'>Bowse & Wilkins </a></li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#jblInfoModal'> JBL </a></li>
                                <li class='divider'></li>
                                <li> <a href='#' data-toggle='modal' data-target='#philInfoModal'>Phillips</a></li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#sonyInfoModal'> Sony</a></li>

                            </ul>

                     <li class='dropdown'>

                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
                            <span class="glyphicon glyphicon-menu-hamburger"></span> Style <span class='caret'></span> </a> 
                            <ul class='dropdown-menu'>
                                <li><a href='#' data-toggle='modal' data-target='#bowseInfoModal'> Wired</li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#sonyInfoModal'> Wireless </a></li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#philInfoModal'> In-ear </a></li>
                                <li class='divider'></li>
                                <li><a href='#' data-toggle='modal' data-target='#beatsInfoModal'> On-ear </a></li>
                            </ul>
                          </li>
                        </ul>
                
                  
                </div>
          <div class='collapse navbar-collapse'>
      
                <ul class="nav navbar-nav navbar-right">
                    <li><a href='#' data-toggle='modal' data-placement='bottom' title='Click to log in' data-target='#loginModal'> Log in/Join <span class='glyphicon glyphicon-user nav-icon'></a></li>
                    <li class="dropdown"> 
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Basket <span class="glyphicon glyphicon-shopping-cart"></span> <span id="basket">1</span><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                                      <li>
                                          <span class="item">
                                            <span class="item-left">
                                                <img src="Media/beats.png" alt="" width="40px"/>
                                                <span class="item-info">
                                                    <a href="products.php"><span>Beats Studio</span></a>
                                                </span>
                                            </span> <br>
                                              <div class="add">
                                                <button class="btn btn-xs btn-success">+</button>
                                                <input type="text" name="qty" id="qty" value="1" disabled>
                                                <button class="btn btn-xs btn-danger">-</button>
                                            </div>
                                        </span>
                                    </li> <br>
                                    <li><p class="cartTotal"><strong>Total: £<span>229.98</span></strong></p></li>
                                    <li class="divider"></li>
                                    <li><a class="text-center" href="checkOut.php">Checkout</a></li>
                                </ul>
                              </li>
                </ul>
        </div>
</header>
        <div class="container-fluid" id="panel">
                                 <div class="navbar-header">
                                    <a class="navbar-brand" href="index.php">
                                        <img alt="Brand" src="Media/p.png" id="logo" width="130px" height="50px">
                                    </a>

                                </div>
                                <form class="navbar-form navbar-left" form id="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <a href="searchResults.php"><button type="button" id="searchbutton" class="btn btn-default" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </button></a>
                                </form>

                </div>
    </nav>
    <br><br><br><br><br>