<?php
require 'includes/common.php';
$code = mysqli_real_escape_string($con,$_POST['code']);
if($code=='SHOP40')
{
    header('location:cart.php?discount=true');
}
else
{
    header('location:cart.php?discount=error');
}
?>

