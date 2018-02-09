<!--  Author: Jovanie Lawrence
   Date: 08/02/18    
   Description: This source code will find products that the user search for. -->
<!-- import php file to display navbar -->
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
               <strong>Sort By:</strong>
               <select>
                  <option value="relevance">Relevance</option>
                  <option value="priceLToH">Price: Low to High</option>
                  <option value="priceHToL">Price: High to Low</option>
                  <option value="Brand">Brand</option>
                  <option value="Style">Style</option>
               </select>
            </div>
         </div>
         <!-- Product Grid -->
         <div id="products" class="row">
            <!-- Product (Inside Out) -->
            <div class="item col-md-4">
               <div class="thumbnail">
                  <img class="group" src="Media/beats.png" width="150px" />
                  <div class="caption">
                     <h4 class="group inner list-group-item-heading"> <strong> Beats Studio Wireless </strong></h4>
                     <p class="group inner list-group-item-text"> With Beats by Dr. Dre Studio Wireless Headphones, you can go without wires and enjoy adaptive noise cancellation. With a 9 metre Bluetooth limit, you can enjoy free roam and take calls, skip songs and change the volume using just the headphones</p>
                     <div class="row">
                        <div class="col-md-4">
                           <p class="lead"> <strong> £249.99 </strong></p>
                        </div>
                        <div class="col-md-4">
                           <a class="btn btn-success" href="#" data-toggle='modal' data-target='#beatsCartModal'>Add to Basket</a>
                        </div>
                        <div class="col-md-4">
                           <a class="btn btn-info" href="" data-toggle='modal' data-target='#beatsInfoModal'>More Info</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- import modals for functionality -->
   <?php require 'modals.php';?>
</body>
<!-- Website footer -->
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
<p id='built-by' class='navbar-text'> &copy; J Lawrence</p>
</html>