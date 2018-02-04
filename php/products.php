<!DOCTYPE html> 
    <html>
        <head>
           <title> My Basket | Peach</title>
    
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

                     <li id='loggedInInButton' class='dropdown'>

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
                  </ul>
                </div>


                <div class='collapse navbar-collapse' >
      
                    <ul class="nav navbar-nav navbar-right">
                    
                     <li class="dropdown">
                        <a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> Hello James <span class='glyphicon glyphicon-user nav-icon'><span class='caret'></span> </a>
                    <ul class="dropdown-menu">
                          <li><a href="#" data-toggle='modal' data-target="#editModal"> Update My Details</a></li>
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
                                    <li><a class="text-center" href="checkOut.html">Checkout</a></li>
                                </ul>
                              </li>
                </ul>
        </div>
</header>
        <div class="container-fluid" id="panel">
                                
                                 <div class="navbar-header">
                                    <a class="navbar-brand" href="mainpage.html">
                                        <img alt="Brand" src="p.png" id="logo"width="130px">
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

     <div class="container-fluid">
        
        
        <h1 class='login_title text-center'>My Basket</h1>
        <!--    Table to display list of products    -->
        <table class="table table-striped">
            <!--        Column Headings        -->
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <!--       Table Data         -->
            <tbody>
                <tr>
                    <td><img src="beats.png" height="100px"></td>
                    <td>1</td>
                    <td> <strong> £199.99 </strong> </td>
                    <td>
                        <!--             Action Buttons               -->
                        <button class="btn btn-primary" id="viewButton" data-toggle="modal" data-target="#viewOrderModal">View</button>
                        <button class="btn btn-success" id="editButton" data-toggle="modal" data-target="#editUserModal">Edit Details</button>
                        <button class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal"> Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="checkOut.html"><button type="button" class="btn btn-success pull-right">Checkout</button></a>
    </div>
    </div>

        <!-- Modal displayed for the user to edit their details -->
        <div id="editUserModal" class="modal fade" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--            Edit User Modal Header            -->                        
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="login_title text-center">Edit Details</h2>
                    </div>
                    <!--            Edit User Modal Body            --> 
                    <div class="modal-body">
                        <div id="editUserAlert"></div>
                        <!--              Register Main Form              -->                           
                        <form id="editUserForm" class="form-horizontal" method="post">

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="firstNameEditUser">First Name</label>  
                                <div class="col-md-6">
                                    <input id="firstNameEditUser" name="firstNameEditUser" type="text" placeholder="first name" class="form-control input-md" value="John">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lastNameEditUser">Last Name</label>  
                                <div class="col-md-6">
                                    <input id="lastNameEditUser" name="lastNameEditUser" type="text" placeholder="last name" class="form-control input-md" value="Smith">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="emailEditUser">Email Address</label>  
                                <div class="col-md-6">
                                    <input id="emailEditUser" name="emailEditUser" type="text" placeholder="email address" class="form-control input-md" value="john@johnsmith.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="passwordEditUser">Password</label>  
                                <div class="col-md-6">
                                    <input id="passwordEditUser" name="passwordEditUser" type="password" placeholder="password" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="passwordEditUser">Confirm Password</label>  
                                <div class="col-md-6">
                                    <input id="confirmPasswordEditUser" name="confirmPasswordEditUser" type="password" placeholder="confirm password" class="form-control input-md">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="addressLine1EditUser">Address Line 1</label>  
                                <div class="col-md-6">
                                    <input id="addressLine1EditUser" name="addressLine1EditUser" type="text" placeholder="address line 1" class="form-control input-md" value="Middlesex University">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="addressLine2EditUser">Address Line 2</label>  
                                <div class="col-md-6">
                                    <input id="addressLine2EditUser" name="addressLine2EditUser" type="text" placeholder="email address" class="form-control input-md" value="The Burroughs">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cityEditUser">City</label>  
                                <div class="col-md-6">
                                    <input id="cityEditUser" name="cityEditUser" type="text" placeholder="city" class="form-control input-md" value="London">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="postcodeEditUser">UK Postcode</label>  
                                <div class="col-md-6">
                                    <input id="postcodeEditUser" name="postcodeEditUser" type="text" placeholder="uk postcode" class="form-control input-md" value="NW4 4BT">
                                </div>
                            </div>

                            <button id="editUserButton"type="submit" class="btn btn-success center-block">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div id="viewOrderModal" class="modal fade" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h2 class="login_title text-center"> Order Details</h2>
                    </div>
                    <div class="modal-body">
                        <!--            Form to display the data            -->
                        <form id="existingOrderForm" class="form-horizontal" method="post">
                            <!--             Display each field with data               -->

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="orderNumber">Order No</label>  
                                <div class="col-md-4">
                                    <input id="orderNumber" name="orderNumber" type="number" class="form-control input-md" value="1000" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="orderCreated">Order Created</label>  
                                <div class="col-md-4">
                                    <input id="orderCreated" name="orderCreated" type="datetime" class="form-control input-md" value="28/01/2018 21:50" disabled>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label" for="lastModified">Last Modified</label>  
                                <div class="col-md-4">
                                    <input id="lastModified" name="lastModified" type="datetime" class="form-control input-md" value="28/01/2018 21:50" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="status">Status</label>  
                                <div class="col-md-4">
                                    <input id="status" name="status" type="text" class="form-control input-md" value="Delivered" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="address">Delivery Address</label>
                                <div class="col-md-4">                     
                                    <textarea rows="5" cols="1000" class="form-control" id="address" name="address" disabled>Middlesex University&#13;&#10The Burroughs&#13;&#10London&#13;&#10NW4 4BT&#13;&#10United Kingdom</textarea>
                                </div>
                            </div>

                            <!--    Table to display Products Purchased    -->
                            <div class="container-fluid">
                                <table class="table table-striped">
                                    <!--        Column Headings        -->
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Brand</th>
                                            <th>Qty</th>
                                            <th>Unit Price</th>
                                            <th>Line Price</th>
                                        </tr>
                                    </thead>
                                    <!--       Table Data         -->
                                    <tbody>
                                        <tr>
                                            <td><img src="beats.png" width="50px"></td>
                                            <td>Beats Studio</td>
                                            <td>2</td>
                                            <td>£249.99</td>
                                            <td>£249.99</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="orderTotal">Order Total</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">£</span>
                                        <input id="orderTotal" name="orderTotal" class="form-control" type="text" value="251.00" disabled>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

 <!-- Modal displayed for the user to edit their details -->
            <div id="editModal" class="modal fade" data-keyboard="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!--            Edit User Modal Header            -->                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h2 class="modal-title login_title text-center">Edit Details</h2>
                        </div>
                        <!--            Edit User Modal Body            --> 
                        <div class="modal-body">
                            <div id="editUserAlert"></div>
                         <div class='modal-body'>
               <!-- Open a form to the body -->
               <div id="registerAlert"></div>

               <form id="registerForm">
                  <div id="firstName-Group" class="form-group">
                        <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "firstname"  -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id='firstName' placeholder='Firstname'> 
                  </div>
                  <div id="surName-Group" class="form-group">
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-user'></i>
                     <!-- Create a text field "surname"   -->
                     <input type='text' onkeyup='checkIfText(this);' maxlength='15' id="surName"  name='surname' placeholder='Surname'> 
                  </div>
                  <div id="email-Group" class="form-group">
                     <!--Display email icon -->
                     <i class='glyphicon glyphicon-envelope'></i>
                     <!-- Create a text field "email"  -->
                     <input type='text' id="emailReg" data-validation='email' placeholder='Email address'><div class="status" id="status"></div> <span id='error_email' class='text-danger'></span> 
                     <!--Display mobile phone icon -->
                  </div>
                  <div id="phoneNumber-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' onkeyup='checkPhoneNumber(this)' id='phoneNumber' name='number' maxlength="11" placeholder='Phone number'> 
                  </div>
                    <div id="dateOfBirth-Group" class="form-group">
                      <span class="glyphicon glyphicon-calendar"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type="text" id="datepicker" placeholder="Choose">
                  </div>
                    <div id="address1-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' maxlength="11" placeholder='Address 1'> 
                  </div>
                    <div id="address2-Group" class="form-group">
                     <span class="glyphicon glyphicon-home"></span>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' name='number' maxlength="11" placeholder='Address 2'> 
                  </div>
                    <div id="city-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' name='number' maxlength="11" placeholder='City'> 
                  </div>
                   <div id="postCode-Group" class="form-group">
                     <i class='glyphicon glyphicon-phone'></i>
                     <!-- Create a text field "phonenumber"   -->
                     <input type='text' id='phoneNumber' name='number' maxlength="11" placeholder='Postcode'> 
                   </div>
                  <div id="password-Group" class="form-group">
                     <!--Display password lock icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "password" -->
                     <input type='password' id="password" minlength='4' maxlength='16' name='password' placeholder='Password'> <br><span id="passstrength"></span> <br> 
                     <!--Display username icon -->
                     <i class='glyphicon glyphicon-lock'></i>
                     <!-- Create a text field "reEnterPassword" -->
                     <input type='password' id="confirmPassword" minlength='4' maxlength='16'  name='confirmPassword' placeholder='Confirm password'>
                  </div>

                  <!-- Close form -->
               </form>
               <!-- Close modal body -->
            </div>

                                <button id="editUserButton"type="submit" class="btn btn-success center-block">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


    <div id="deleteModal" class="modal fade" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Are you sure you want to remove this product?</h3>
                </div>
                <div class="modal-body">
                    <div class="settingsButtons">
                        <button type="button" class="btn btn-success settings" >Yes</button>
                        <button type="button" class="btn btn-danger settings" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    </body>
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
</html>