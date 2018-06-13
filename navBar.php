<nav class="navbar navbar-inverse navbar-fixed-top" style='background-color:#062029'>
    <header>
        <?php 
        session_start();
        if (isset($_SESSION['customerID'])) { ?>
            <div class='dropdown'>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href='#' data-toggle='dropdown' data-placement='bottom' title='Your account'>
                        <span class='caret'></span>
                        Hello <? echo $_SESSION['firstName'] ?>
                        <span class='glyphicon glyphicon-user nav-icon'></a></span>
                            <ul class="dropdown-menu">
                                <li><a href="#" data-toggle="modal" data-target="#editDetailsModal" >Edit Details</a></li>
                                <li><a href="basket.php">Orders</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                </ul>
            </li>
            </div>
        <?php } else { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href='#' data-toggle='modal' data-placement='bottom' title='Click to log in' data-target='#loginModal'>Login/Join <span class='glyphicon glyphicon-user nav-icon'></a> </span>
                    </li>
                </ul>
        <?php } ?>
    </header>
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
                    </li>

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
                    </li>
                </div>
          
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"> 
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Basket <span class="glyphicon glyphicon-shopping-cart"></span> <span id="basket"></span><span class="caret"></span></a>

                        <ul class="dropdown-menu dropdown-cart" role="menu">
                                <li>
                                   <?php
                require 'vendor/autoload.php'; 

                $client = new MongoDB\Client("mongodb://localhost:27017"); 
                $collection = $client->peach;
                $products = $collection->headphones->find();

                foreach ($products as $document){
                $price = $document['price'];
                $price = $price/100;
                $price = number_format((float)$price, 2, '.', '');
                echo
                "<tr>
                  <td class='text-left'><img src='./". $document['artwork'] ."'width='50px'></td>
                  <td class='text-center'>". $document['brand'] ."</td>
                  <td class='text-center'>£$price</td>
                  <td></td>
                  <td></td>
                  <td class='text-center'><strong>Order Total:</strong></td>
                  <td class='text-right'><strong>£500.00</strong></td>
               </tr>"; 
           }?>

                            <li><a class="text-center" href="checkout.php">Checkout</a></li>

                        </ul>
                    </li>
        </ul> 
        </div>
        <div class="container-fluid" id="panel">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <img alt="Brand" src="Media/p.png" id="logo" width="130px" height="50px">
                        </a>
                    </div>

                        <form class="navbar-form navbar-left" id="search" name ="name" method="GET" action="searchResults.php">
                            <div class="form-group">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" id="searchbutton" onclick="search()"btn btn-default" aria-label="Left Align">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </form>

        </div>
    </nav>
    <br><br><br><br><br>