<!--  Author: Jovanie Lawrence
      Date: 08/02/18    
      Description: Code for the products page on the peach cms admin. -->
<?php
require 'vendor/autoload.php';

session_start();
if (!isset($_SESSION['adminID'])) {
   session_start();
   header('Location: ./'); 
} ?>

<!DOCTYPE html>
<html>
   <head>
      <!--   Page Title     -->
      <title> Products | Admin  </title>
      <!-- import tab icon -->
      <!-- import boostrap stylesheets -->
      <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
      <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <script src='Javascript/jquery-3.1.1.min.js'> </script>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
      <script src='Javascript/bootstrap.min.js'> </script>
      <script src='Javascript/jquery.md5.js'> </script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <!--import our own stylesheet and javascript file -->
      <script src='Javascript/index.js'> </script>
      <script src='Javascript/peachAdmin.js'> </script>
      <link rel='stylesheet' type='text/css' href='cmsStyleSheet.css'>
   </head>
    <!-- Navigation bar -->
      <nav class="navbar navbar-light" style="background-color: #F3F2EE;">
         <header>
            <div class='container-fluid'>
            <div class='navbar-header'>
               <a href='#' class='d-inline-block align-top'> <img src=""> </a>
               <ul class="nav navbar-nav navbar-left">
                  <a class="navbar-brand" >
                  <img alt="Brand" src="p.png" id= width="120px" height="50px">
                  </a>
                  <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
                  <li><a href="products.php"> Products </a></li>
                  <li><a href="orders.php"> Orders </a></li>
               </ul>
            </div>
            <div class='collapse navbar-collapse'>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href='index.php'> Log Out <span class='glyphicon glyphicon-user nav-icon'></a></li>
               </ul>
            </div>
      </nav>
      </header>
      <body>
         <div class="container-fluid">
            <h2 class="text-center">Products</h2>
            <button id="addProductButton" class="btn btn-success" data-toggle="modal" data-target="#addProductModal">Add Product</button>
            <!--    Table to display list of products    -->
            <table class="table table-striped">
               <!--        Column Headings        -->
               <thead>
                  <tr>
                     <th>Artwork</th>
                     <th>Barcode</th>
                     <th>Price</th>
                     <th>Brand</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <!--       Table Data         -->
               <tbody>
                  <?php 

                  $client = new MongoDB\Client("mongodb://localhost:27017");

                  $collection = $client->peach->headphones;

                   $result = $collection->find([], ['sort' => ['details.brand' => 1]]); 
                   foreach ($result as $entry) {

                     $price =  $entry['price'];
                     $price = $price/100;
                     $price = number_format((float)$price, 2, '.', '');
         
                  echo
                  "<tr>
                     <td><img src='../". $entry['artwork'] . "' height='120px'></td>
                     <td>" . $entry['barcode'] . "</td>
                     <td>£" . $price . "</td>
                     <td>" . $entry['brand'] . "</td>
                     <td>
                        <!--             Action Buttons to manage orders              -->
                        <button class='btn btn-success' id='edit' onclick='return showEditProduct(\"" . $entry['barcode'] . "\");'>View/Edit Product</button>
                        <button class='btn btn-danger' id='delete' onclick='return showDeleteProduct(\"" . $entry['barcode'] . "\");'>Delete Product</button>
                     </td>
                  </tr>";
               }

                  ?>
               </tbody>
            </table>
         </div>
         <!-- Add new product Modal -->
         <div id="addProductModal" class="modal fade" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h2 class="text-center">Add New Product</h2>
                  </div>
                  <div class="modal-body">
                     <!--            Form to display the information about a particular product       -->
                     <form class="form-horizontal" action="addProduct.php" method="post">
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="artwork">Artwork URL</label>  
                            <div class="col-md-7">
                                <input id="artwork" name="artwork" type="text" placeholder="Media/example.png" class="form-control input-md">
                            </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="barcode">Keywords</label>  
                           <div class="col-md-4">
                              <input id="keywords" name="keywords" type="text" placeholder="keywords" class="form-control input-md" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="barcode">Barcode</label>  
                           <div class="col-md-4">
                              <input id="barcode" name="barcode" type="text" placeholder="Barcode" class="form-control input-md" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="brand">Brand</label>  
                           <div class="col-md-7">
                              <input id="brand" name="brand" type="text" placeholder="Brand" class="form-control input-md" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="model">Model</label>  
                           <div class="col-md-7">
                              <input id="model" name="model" type="text" placeholder="Model" class="form-control input-md" value="">
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="colour">Colour</label>
                           <div class="col-md-4">
                              <div class="input-group">
                                 <input id="colour" name="colour" class="form-control" placeholder="Colour" type="text" value="">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="price">Price</label>
                           <div class="col-md-4">
                              <div class="input-group">
                                 <span class="input-group-addon">£</span>
                                 <input id="price" name="price" class="form-control" maxlength="6" placeholder="0.00" type="text" value="">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="quantity">Stock</label>  
                           <div class="col-md-2">
                              <input id="stock" name="stock" type="text" placeholder="Qty" class="form-control input-md" value="">
                           </div>
                        </div>
                      
                        <div class="form-group">
                           <label class="col-md-4 control-label" for="video">Product Video</label>  
                           <div class="col-md-7">
                              <input id="video" name="video" type="text" placeholder='' class="form-control input-md">
                           </div>
                        </div>
                        <button id="saveButton" type="submit" class="btn btn-success">Save</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!--    View Product Modal    -->
         <?php
            $client = new MongoDB\Client("mongodb://localhost:27017");

            $collection = $client->peach->headphones;
            $result = $collection->find();

            foreach ($result as $entry) :
         ?>
         <div id="viewProduct-<?php echo $entry['barcode'] ?>" class="modal fade" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h2 class="text-center">View/Edit Product </h2>
                  </div>
                  <div class="modal-body">
                     <!--            Form to display the data            -->
                     <form
                        class="form-horizontal"
                        onsubmit="saveEditProduct(this, '<?php echo $entry['barcode'] ?>'); return false"
                     >
                        <!--             Display each field with data               -->
                        <div class="form-group">
     
                        <label class='col-md-4 control-label' for='barcode'>Barcode</label>  
                           <div class='col-md-4'>
                              <input name='barcode' type='text' placeholder='Barcode' class='form-control input-md' value="<?php echo $entry['barcode'] ?>">
                           </div>
                        </div>
                        <div class='form-group'>
                           <label class='col-md-4 control-label' for='brand'>Brand</label>  
                           <div class='col-md-7'>
                              <input name='brand' type='text' placeholder='Brand' class='form-control input-md' value="<?php echo $entry['brand'] ?>">
                           </div>
                        </div>
                        <div class='form-group'>
                           <label class='col-md-4 control-label' for='model'>Model</label>  
                           <div class='col-md-7'>
                              <input name='model' type='text' placeholder='Model' class='form-control input-md' value="<?php echo $entry['model'] ?>">
                           </div>
                        </div>
                        <div class='form-group'>
                           <label class='col-md-4 control-label' for='colour'>Colour</label>
                           <div class='col-md-4'>
                              <div class='input-group'>
                                 <input name='colour' class='form-control' placeholder='Colour' type='text' value="<?php echo $entry['colour'] ?>">
                              </div>
                           </div>
                        </div>
                        <div class='form-group'>
                           <label class='col-md-4 control-label' for='price'>Price</label>
                           <div class='col-md-4'>
                              <div class='input-group'>
                                 <span class='input-group-addon'>£</span>
                                 <input name='price' class='form-control' placeholder='0.00' type='text' value="<?php echo $entry['price'] ?>">
                              </div>
                           </div>
                        </div>
                        <div class='form-group'>
                           <label class='col-md-4 control-label' for='stock'>In Stock</label>  
                           <div class='col-md-2'>
                              <input name='stock' type='text' placeholder=Qty' class='form-control input-md' value="<?php echo $entry['stock'] ?>">
                           </div>
                        </div>
                        <div class='form-group'>
                           <label class='col-md-4 control-label' for='video'>Product Video</label>  
                           <div class='col-md-7'>
                              <input name='video' type='text' placeholder='eg https:www.youtube.com' class='form-control input-md' value="<?php echo $entry['video'] ?>">
                           </div>
                        </div>
                        <button type='submit' class='btn btn-success'>Save</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>

         <?php endforeach; ?>

         <!-- Delete product modal -->
         <div id="deleteProduct" class="modal fade" data-keyboard="false">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h3 class="modal-title">Are you sure you want to remove this product?</h3>
                  </div>
                  <div class="modal-body">
                     <div class="settingsButtons">
                        <button type="button" class="btn btn-success settings" id="yes" >Yes</button>
                        <button type="button" class="btn btn-danger settings" id="no" data-dismiss="modal">No</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </body>
</html>