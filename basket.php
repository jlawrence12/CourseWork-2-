 <!--  Author: Jovanie Lawrence
   Date: 08/02/18    
   Description: The user can view their basket and make changes if they so wish. -->
<!-- import php file to display navbar -->
    <?php require 'navBar.php'; ?>

    <!-- PAge title -->
    <title> My Basket | Peach </title>
    <!-- Page content -->
    <body>
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
                 <?php 

                  $client = new MongoDB\Client("mongodb://localhost:27017");

                  $collection = $client->peach->headphones;

                   $result = $collection->find([], ['sort' => ['details.brand' => 1]]); 
                   foreach ($result as $entry) {
         
                  echo
                "<tr>
                    <!-- Image of the product -->
                    <td><img src="Media/beats.png" height="90px"></td>
                    <td>1</td>
                    <td> <strong> £249.99 </strong> </td>
                    <td>
                        <!--             Action Buttons to user to make amendments to order         -->
                        <button class="btn btn-primary" id="viewButton" data-toggle="modal" data-target="#viewOrderModal">View</button>
                        <button class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal"> Remove</button>
                    </td>
                </tr>";}
            </tbody>
        </table>
        <a href="checkOut.php"><button type="button" class="btn btn-success pull-right">Checkout</button></a>
    </div>
    </div>
<!-- import modals for functionality -->
<?php require 'modals.php';?>
    </body>
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
</html>