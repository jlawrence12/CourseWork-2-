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
        <?php require 'navBar.php'; ?>
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
                        <button class="btn btn-success" id="editButton" data-toggle="modal" data-target="#editModal">Edit Details</button>
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