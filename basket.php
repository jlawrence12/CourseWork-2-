
    <?php require 'navBar.php'; ?>

    <title> My Basket | Peach </title>
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
                <tr>
                    <td><img src="Media/beats.png" height="90px"></td>
                    <td>1</td>
                    <td> <strong> £249.99 </strong> </td>
                    <td>
                        <!--             Action Buttons               -->
                        <button class="btn btn-primary" id="viewButton" data-toggle="modal" data-target="#viewOrderModal">View</button>
                        <button class="btn btn-danger" id="deleteButton" data-toggle="modal" data-target="#deleteModal"> Remove</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="checkOut.php"><button type="button" class="btn btn-success pull-right">Checkout</button></a>
    </div>
    </div>

<?php require 'modals.php';?>

    </body>
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
</html>