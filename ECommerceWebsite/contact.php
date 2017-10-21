<?php
require 'includes/common.php';
?>
<!DOCTYPE html> 
<html>
    <head> 
        <!---- The page has a title Lifestyle Store--> 
        <title>Write to us</title> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!---- External css file index.css placed in the folder css is linked--> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  
              >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
        ></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
        <style>
        footer{
        position:fixed;
        }
        </style>
    </head> 
    <body> 
        <?php
        include 'includes/header.php';
        ?>
        <?php
        if (isset($_GET['received']))
            if ($_GET['received'] == 'true') {
                ?>
                <script>
                    $(document).ready(function () {
                        $("#receivedModal").modal("show");
                    });
                </script>
                <?php
            }
        ?>
        <div class="container-fluid contact_center">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>Write your query</h4>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="query_submit.php" id="query">
                                <div class="form-group">
                                    <input type="email" class="form-control"  
                                           placeholder="Registered Email" name="email" required>
                                </div>
                                <br>
                                <textarea name="query" form="query" 
                                          placeholder="Enter query" class="form-control"></textarea>
                                <br><br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <br>
                            <div><span style="color:red"><?php
        if (isset($_GET['email_error']))
            echo htmlspecialchars($_GET['email_error']);
        ?></span></div>
                        </div>

                    </div>
                </div>
                <br><br>
                <div class=" visible-lg visible-md col-lg-3 col-lg-offset-1 
                     col-md-4 col-md-offset-1">                    
                    <img src="img/contact.png" class="img-rounded" alt="IMAGE"> 
                </div>
            </div>
        </div>
        <div id="receivedModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">  
                    <div class="modal-body">
                        <h4>Your query has been received</h4><br>
                        <h4>We will contact you shortly</h4>
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