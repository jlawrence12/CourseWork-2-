<!--  Author: Jovanie Lawrence
   Date: 08/02/18    
   Description: This source code gives a confirmation message that the purchase was successful . -->
<!-- import php file to display navbar -->
<?php require 'navBar.php'; ?>
<!-- Page title -->
<title> Confirmation | Peach </title>
<!-- Page content -->
<body>
   <div id="confirm" class="container">
      <div class="container">
         <img alt="Brand" src="Media/tick.png" height="170px" id="tick">
         <!-- text is type 'success' to ensure green text -->
         <h2 class='text-success'> Thank you for Your purchase </h2>
      </div>
   </div>
   <div id="content" class="container">
      <!--    Table to display customer information    -->
      <table class="table table-striped">
         <!--        Column Headings        -->
         <thead>
            <tr>
               <th>Confirmation</th>
            </tr>
         </thead>
         <!--       Table Data         -->
         <tbody>
            <tr>
               <td>
                  <strong> Order Number: </strong> 1000 <br> 
                  <p>
                     <strong>Delivery Address:</strong><br>
                     David Bible<br>
                     Middlesex University<br>
                     The Burroughs<br>
                     London<br>
                     NW4 4BT
                  </p>
               </td>
            </tr>
         </tbody>
      </table>
      <!-- Button is linked to the products page for users who would like to buy more products.-->
      <a href="products.php"><button type="button" class="btn btn-success pull-right"> Continue Shopping</button></a>
   </div>
   </div>
</body>
<!-- Website footer -->
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
<p id='built-by' class='navbar-text'> &copy; J Lawrence</p>
</html>