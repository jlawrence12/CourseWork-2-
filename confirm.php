<!DOCTYPE html> 
    <html>
        <head>
           <title> Confirmation | Peach </title>
    
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
    <div id="confirm" class="container">
                <div class="container">
                    <img alt="Brand" src="tick.png" height="170px" id="tick">
                    <h2 class='text-success'> Thank you for Your purchase </h2>
                
                </div>
            </div>

              <div id="content" class="container">
                
                <!--    Table to display list of Orders    -->
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
                            <td> <strong> Order Number: </strong> 1000 <br> 
                                    <p>
                                        <strong>Delivery Address:</strong><br>
                                        James Smith<br>
                                        Middlesex University<br>
                                        The Burroughs<br>
                                        London<br>
                                        NW4 4BT
                                    </p>


                            </td>
                        </tr>
                    </tbody>
                </table>
                 <a href="main.php"><button type="button" class="btn btn-success pull-right"> Continue Shopping</button></a>

            </div>
            <footer></footer>
        </div>
 

    </body>
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
</html>