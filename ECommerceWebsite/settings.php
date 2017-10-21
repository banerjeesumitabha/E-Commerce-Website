<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
    header('location:index.php');
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SETTINGS</title>
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
        <div class="container cart_center">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>Change Password</h2><br>
                        <form method="POST" action="settings_script.php">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="old_password" pattern=".{6,}"required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="New Password (must be atleast 6 characters)" pattern=".(6,}" name="new_password" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-type New Password" pattern=".{6,}" name="new_password_retype" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            <br>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <span style="color:red">
                        <?php
                        if(isset($_GET['error']))
                            echo htmlspecialchars($_GET['error']);
                        ?>
                    </span> 
                </div>
            </div>
            </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
