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
        <title>LOGIN</title>
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
        <?php
        if(isset($_GET['reset']))
            if($_GET['reset']=='true')
            {
                ?>
        <script> 
            $(document).ready(function(){
    $("#resetModal").modal("show");
            });
    </script>
        <?php
            }
        ?>
        <div class="container-fluid login_center">
            <div class="row">
                <div class="visible-md visible-lg col-lg-3 col-lg-offset-2 
                     col-md-4 col-md-offset-1">                    
                    <img src="img/login.jpg" class="img-rounded" alt="IMAGE"> 
                </div>
                <div class="col-lg-4 col-lg-offset-1 col-md-5 col-md-offset-1">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>Login to make a purchase</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form>  
                            <div><span style="color:red"><?php
                                if (isset($_GET['credential_error']))
                                    echo htmlspecialchars($_GET['credential_error']);
                                ?></span></div>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="resetModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">  
      <div class="modal-body">
          <h4>Password changed successfully</h4><br>
          <h4>Login with new password</h4>
      </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
