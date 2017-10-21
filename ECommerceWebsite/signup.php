<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SIGN UP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="container-fluid signup_center">
            <div class="row">
            <div class="visible-md visible-lg col-lg-3 col-lg-offset-2 
                     col-md-4 col-md-offset-1">                    
                <br><br><img src="img/signup.jpg" class="img-rounded" alt="IMAGE"> 
                </div>
                <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1">
                    <h2>SIGN UP</h2>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input class="form-control" placeholder="Name" name="name"  pattern="[a-zA-Z\s]+" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email (in correct format)"  name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password (must be atleast 6 characters)" name="password" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Contact (must be atleast 8 characters)" name="contact" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control"  placeholder="City" name="city" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control"  placeholder="Address" name="address" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            <span style="color:red"><?php
            if (isset($_GET['error']))
                echo htmlspecialchars ($_GET['error']);
            ?></span></div></div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
