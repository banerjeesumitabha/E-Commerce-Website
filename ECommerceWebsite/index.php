<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html> 
<html>
    <head> 
        <!---- The page has a title Lifestyle Store--> 
        <title>Lifestyle Store</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!---- External css file index.css placed in the folder css is linked--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  
              >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        ></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head> 
    <body> 
<?php
include 'includes/header.php';
?>
        <div class="banner-image img-responsive">
            <div class="container">
                <center>
                    <div class="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <br>
                        <a class="btn btn-danger btn-lg active" href="products.php">Shop Now</a>
                    </div>
                </center>
            </div>                    
        </div>
        <br><br>
        <div class="container-fluid">
        <div class="row text-center">
            
                <div class="col-md-4 col-sm-6">
                    <a href="products.php">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="">
                        <div class="caption">
                            <h2>Cameras</h2> 
                            <p>Choose among the best available in the world.</p>
                        </div></div></a></div>
            <div class="col-md-4 col-sm-6">
                    <a href="products.php">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="">
                        <div class="caption">
                            <h2>Watches</h2> 
                            <p>Original Watches from the best brands.</p>
                        </div></div></a></div>
            <div class="col-md-4 col-sm-6">
                    <a href="products.php">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="">
                        <div class="caption">
                            <h2>Shirts</h2> 
                            <p>Our exquisite collection of shirts.</p>
                        </div></div></a></div>
           
        </div>
        </div>
        <br><br><br>
        
<?php
include 'includes/footer.php';
?>
    </body> 
</html>