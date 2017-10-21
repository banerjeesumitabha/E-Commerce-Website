<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
}
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cart</title>
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
        $user_id = $_SESSION['id'];
        ?>
        <div class="container login_center ">
            <table class="table table-bordered">
                <h2>Your Shopping Cart</h2>
                <br>
                <?php
                $query = "Select * from users_items INNER JOIN items "
                        . "on users_items.item_id = items.id "
                        . "and users_items.user_id = '$user_id' "
                        . "and status = 'Added to cart'";
                $result = mysqli_query($con, $query) or die(mysqli_error($con));
                if (mysqli_num_rows($result) == 0) {
                    ?>
                    <div>
                        <span style="color:red">
                            <h5>Add items to cart first!</h5>
                        </span>
                    </div>
                    <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>N/A</td>
                            <td>
                                <a href="products.php" class="btn btn-primary">
                                    Shop
                                </a>
                            </td>
                        </tr>
                    </tbody>
    <?php
} else {
    ?>
                    <tbody>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
    <?php
    $sum = 0;
    $id_list = '';
    while ($row = mysqli_fetch_array($result)) {
        ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['item_id']) ?></td>
                                <td><?php echo htmlspecialchars($row['name']) ?></td>
                                <td><?php echo htmlspecialchars($row['price']) ?></td>
                                <td><a href='cart_remove.php?id=<?php echo htmlspecialchars($row['item_id']) ?>'
                                       class='btn-link'> Remove</a></td>
                            </tr>
        <?php
        $id_list = $id_list . $row['id'] . ',';
        $sum = $sum + $row['price'];
    }
    if(isset($_GET['discount']))
                if($_GET['discount']=='true')
                {$sum = 0.6*$sum;}
    ?>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo htmlspecialchars($sum) ?></td>
                            <td>
                                <a href='success.php?id_list=<?php echo htmlspecialchars($id_list) ?>' class="btn btn-primary">
                                    Confirm
                                </a>
                            </td>
                        </tr>
                    </tbody>
    <?php
}
?>
            </table>
        </div>
        <br><br><br><br><br><br>
        <div class="container">
        <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
            <h4>Add coupon</h4>
            <form method="POST" action="discount.php">
                <div class="form-group">
                    <input class="form-control"  placeholder="Enter code" name="code" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Apply</button>
            </form>
            <?php
            if(isset($_GET['discount']))
            {
                if($_GET['discount']=='true'){
            ?>
            <div class="alert-success">
                <h4>40% discount has been applied</h4>
            </div>
            <?php
                }else if ($_GET['discount']=='error')
                {
            ?>
            <div class="alert-danger">
                <h4>Invalid Code</h4>
            </div>
            <?php
            }}else
                {
                 ?>  
            <div class="alert-info">
                <h4>Use code SHOP40 to get 40% discount</h4>
            </div>
                <?php
                }
                ?>
        </div></div></div>
        <br>
<?php
include 'includes/footer.php';
?>
    </body>
</html>
