<?php
require 'includes/common.php';
$user_id = $_SESSION['id'];
$item_id = $_GET['id'];
$query = "Delete from users_items where user_id='$user_id' and item_id='$item_id'";
$remove = mysqli_query($con, $query) or die(mysqli_error($con));
header('location:cart.php');
?>

