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
        <title>ORDER SUCCESS</title>
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
        $id_list = explode(',',$_GET['id_list']);
        $user_id = $_SESSION['id'];
        foreach ($id_list as $id) {
            $query = "Update users_items set status='Confirmed' "
                    . "where item_id='$id' and user_id='$user_id'";
            $submit = mysqli_query($con,$query) or die(mysqli_error($con));
        }
        ?>
        <div class="container cart_center text-center">
                <br><br><br>
                <h1>Your order is confirmed and will reach you within 7 days.</h1><br>
                <h2>Thank you for shopping with us.</h2><br>
                <h3> <a href="products.php">Click here</a> to purchase any other item.</h3>        
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
