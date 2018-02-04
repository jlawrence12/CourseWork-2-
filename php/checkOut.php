<!DOCTYPE html> 
    <html>
        <head>
           <title> Checkout | Peach </title>
    
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
        <nav class="navbar navbar-inverse " navbar-fixed-top style='background-color:#062029'>

          <header>
        <div class='container-fluid'>
            <div class='navbar-header'>
                <a href='#' class='d-inline-block align-top'> <img src=""> </a>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.html"> <span class="glyphicon glyphicon-home"></span>Home</a></li>
                    <li id='loggedInInButton' class='dropdown'>

                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class="glyphicon glyphicon-menu-hamburger">
                                    
                                </span> Brand <span class='caret'></span></a>

                            <ul class='dropdown-menu'>
                                <li><a href='#'> Beats</a></li>
                                <li class='divider'></li>
                                <li><a href='#'> Bose </a></li>
                                <li class='divider'></li>
                                <li><a href='#'> Bowse & Wilkins </a></li>
                                <li class='divider'></li>
                                <li><a href='#'> JBL </a></li>
                                <li class='divider'></li>
                                <li><a href='#'> Phillips</a></li>
                                <li class='divider'></li>
                                <li><a href='#'> Sony</a></li>

                            </ul>

                     <li class='dropdown'>

                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> 
                            <span class="glyphicon glyphicon-menu-hamburger"> 

                               </span> Style <span class='caret'></span></a>
                            <ul class='dropdown-menu'>

                                <li><a href='#' </a> Wired</li>
                                <li class='divider'></li>
                                <li><a href='#'> Wireless </a></li>
                                <li class='divider'></li>
                                <li><a href='#'> In-ear </a></li>
                                <li class='divider'></li>
                                <li><a href='#'> On-ear </a></li>

                            </ul>
                    <li><a href="orders.html"> Orders </a></li>
                    <li><a href="products.html"> Products </a></li>
                  </ul>
                </div>


                <div class='collapse navbar-collapse' >
      
                    <ul class="nav navbar-nav navbar-right">
                    
                     <li class="dropdown">
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Hello James <span class='glyphicon glyphicon-user nav-icon'><span class='caret'></span> </a>
                    <ul class="dropdown-menu">
                          <li><a href="#"> Update My Details</a></li>
                          <li><a href="products.html">My Basket</a></li>
                          <li><a href="index.html">Logout</a></li>
                    </ul>
                  </li>
                    <li class="dropdown"> 
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Cart <span class="glyphicon glyphicon-shopping-cart"></span> 1 Items<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-cart" role="menu">
                                      <li>
                                          <span class="item">
                                            <span class="item-left">
                                                <img src="beats.png" alt="" width="40px"/>
                                                <span class="item-info">
                                                    <a href="products.html"><span>Beats Headphones</span></a>
                                                    <span>£229.98</span>
                                                </span>
                                            </span>
                                            <div class="add">
                                                <button class="btn btn-xs btn-success">+</button>
                                                <input type="text" name="qty" id="qty" value="1" disabled>
                                                <button class="btn btn-xs btn-danger">-</button>
                                            </div>
                                        </span>
                                    </li> <br>
                                    <li><p class="cartTotal"><strong>Total: £<span>229.98</span></strong></p></li>
                                    <li class="divider"></li>
                                    <li><a class="text-center" href="">Checkout</a></li>
                                </ul>
                              </li>
                </ul>
        </div>
</header>
        <div class="container-fluid" id="panel">
                                
                                 <div class="navbar-header">
                                    <a class="navbar-brand" href="mainpage.html">
                                        <img alt="Brand" src="p.png" id="logo" width="130px">
                                    </a>

                                </div>
                                <form class="navbar-form navbar-left" form id="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                    <a href="searchResults.html"><button type="button" id="searchbutton" class="btn btn-default" aria-label="Left Align">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </button></a>
                                </form>
                </div>
    </nav>


    <div id="content" class="container">
                        <div class="container">
                            <h1 class="text-center">Checkout</h1>
                            <div class="row">
                                <div class="col-md-9">
                                    <p>
                                        <strong>Delivery Address:</strong><br>
                                        James Smith<br>
                                        Middlesex University<br>
                                        The Burroughs<br>
                                        London<br>
                                        NW4 4BT
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <h2 style="margin-top: 0px;">Recommendations</h2>
                                    <img src="beats.png" width="50px">
                                    <img src="bose.png" width="50px">
                                    <img src="sony.png" width="50px">
                                    <img src="bowse.png" width="50px">
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
                                        <th class="text-center">Brand</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Unit Price</th>
                                        <th class="text-right">Line Price</th>
                                    </tr>
                                </thead>
                                <!--       Table Data         -->
                                <tbody>
                                    <tr>
                                        <td class="text-left"><img src="beats.png" width="50px"></td>
                                        <td class="text-center">Beats by Dre</td>
                                        <td class="text-center">2</td>
                                        <td class="text-center">£250.99</td>
                                        <td class="text-right">£500.01</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center"><strong>Order Total:</strong></td>
                                        <td class="text-right"><strong>£500.01</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="confirm.html"><button type="button" class="btn btn-success pull-right">Buy now</button></a>
                        </div>
                    </div>


<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
                </body>

                </html>

