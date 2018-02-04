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
        <?php require 'navBar.php'; ?>

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
                            <a href="confirm.php"><button type="button" class="btn btn-success pull-right">Buy now</button></a>
                        </div>
                    </div>


<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
                </body>

                </html>

