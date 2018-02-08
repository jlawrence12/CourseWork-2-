
    <?php require 'navBar.php'; ?>

    <title> Check Out | Peach </title>
    <body>
    
    <div id="content" class="container">
                        <div class="container">
                            <h1 class="text-center">Checkout</h1>
                            <div class="row">
                                <div class="col-md-9">
                                    <p>
                                        <strong>Delivery Address:</strong><br>
                                        David Bible <br>
                                        Middlesex University<br>
                                        The Burroughs<br>
                                        London<br>
                                        NW4 4BT
                                    </p>
                                </div>
                                <div class="col-md-3">
                                    <h2 style="margin-top: 0px;">Recommendations</h2>
                                    <img src="Media/beats.png" width="50px">
                                    <img src="Media/bose.png" width="50px">
                                    <a href='#' data-toggle='modal' data-target='#sonyInfoModal'> <img src="Media/sony.png" width="50px" > </a>
                                    <img src="Media/bowse.png" width="50px">
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
                                        <td class="text-left"><img src="Media/beats.png" width="80px"></td>
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
                                        <td class="text-right"><strong>£500.00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="confirm.php"><button type="button" class="btn btn-success pull-right">Buy now</button></a>
                        </div>
                    </div>


<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
                </body>
<?php require 'modals.php';?>
                </html>

