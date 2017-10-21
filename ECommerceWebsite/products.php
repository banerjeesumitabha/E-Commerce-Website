<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PRODUCTS</title>
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
        include 'includes/check_if_added.php';
        ?>
        <?php
        if(isset($_GET['success']))
            if($_GET['success']=='true')
            {
                ?>
        <script> 
            $(document).ready(function(){
    $("#addedModal").modal("show");
            });
    </script>
        <?php
            }
        ?>
        <br><br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>
                    We have the best cameras, watches and shirts for you. 
                    No need to hunt around, we have all in one place.
                </p>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="">
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <p>Price: Rs.36000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                            } else {
                                if (check_if_added(1,$con)) {
                                    echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?> <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php }
                                    }
                                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Samsung DSLR</h3>
                            <p>Price: Rs.40000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                            } else {
                                if (check_if_added(2,$con)) {
                                    echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?> <a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                        <?php }
                                    }
                                    ?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs.45000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                            } else {
                                if (check_if_added(3,$con)) {
                                    echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?> <a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs.50000</p>
<?php
if (!isset($_SESSION['email'])) {
    ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                            } else {
                                if (check_if_added(4,$con)) {
                                    echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?> <a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Galaxy</h3>
                            <p>Price: Rs.12000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                    } else {
                                        if (check_if_added(5,$con)) {
                                            echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?> <a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Nova</h3>
                            <p>Price: Rs.10000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                    } else {
                                        if (check_if_added(6,$con)) {
                                            echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?> <a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>Timex Alpha</h3>
                            <p>Price: Rs.8000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                    } else {
                                        if (check_if_added(7,$con)) {
                                            echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?> <a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/21.jpg" alt="">
                        <div class="caption">
                            <h3>Esprit Sport</h3>
                            <p>Price: Rs.9000</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                } else {
                                    if (check_if_added(8,$con)) {
                                        echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?> <a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>Zodiac Pearl</h3>
                            <p>Price: Rs.2000</p>
                            <?php
                                    if (!isset($_SESSION['email'])) {
                                        ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                } else {
                                    if (check_if_added(9,$con)) {
                                        echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?> <a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Arrow Adventure</h3>
                            <p>Price: Rs.2500</p>
                                    <?php
                                    if (!isset($_SESSION['email'])) {
                                        ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                } else {
                                    if (check_if_added(10,$con)) {
                                        echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?> <a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>Lombard Classic</h3>
                            <p>Price: Rs.1500</p>
                                    <?php
                                    if (!isset($_SESSION['email'])) {
                                        ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                                    } else {
                                        if (check_if_added(11,$con)) {
                                            echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                        } else {
                                            ?> <a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                                <?php }
                            }
                            ?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Turtle Mark</h3>
                            <p>Price: Rs.1750</p>
                            <?php
                            if (!isset($_SESSION['email'])) {
                                ?> 
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">
                                        Buy Now</a></p> <?php
                            } else {
                                if (check_if_added(12,$con)) {
                                    echo '<a  data-toggle="modal" href="#addedModal" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?> <a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
    <?php }
}
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="addedModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">  
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2>Thank You</h2>
      </div>
      <div class="modal-body">
          <h3>Item added to cart successfully</h3>
      </div>
        <div class="modal-footer">
            <a href="cart.php" class="btn btn-primary">View Cart</a>
      </div>
    </div>
  </div>
        </div>

        <br><br><br>
<?php
include 'includes/footer.php';
?>
    </body>
</html>
