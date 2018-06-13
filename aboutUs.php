 <!--  Author: Jovanie Lawrence
   Date: 08/02/18    
   Description: This source code gives information on the members of our group. -->
<!-- import php file to display navbar -->
<!DOCTYPE html> 
    <html>
        <head>
    
            <link rel='shortcut icon' href='Media/peach.png'>
    
            <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
    
            <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>

            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

            <script src='Javascript/jquery-3.1.1.min.js'> </script>
            
            <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'> </script>
    
            <script src='Javascript/bootstrap.min.js'> </script>

            <script src='Javascript/jquery.md5.js'> </script>

            <script src='Javascript/index.js'> </script>

            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
            <link rel='stylesheet' type='text/css' href='css/StyleSheet.css'>
        
        </head>
 <?php require 'navBar.php'; ?>
  <title> About Us | Peach </title>
    <body>
    <!-- Centre header -->
    <h2 class="text-center"> About Us <h2>
    <h3>---Our Story---</h3>

    <p class="text-center">
        We become facinated by the idea of creating an e-commerce site
        that sells headphones. <br>

        Jovanie, Alex and Yaser.

        Please leave your feedback <a href='#' data-toggle='modal' data-target='#feedbackModal'> here </a>
</p>


<!-- import modals for functionality -->
<?php require 'modals.php';?>
    </body>
<!-- Website footer -->
<div class='navbar navbar-default navbar-fixed-bottom navbar-dark' style='background-color:#062029'>
   <p id='built-by' class='navbar-text'> &copy; J Lawrence</p> 
</html>