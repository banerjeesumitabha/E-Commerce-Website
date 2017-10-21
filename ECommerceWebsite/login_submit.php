<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);
$query = "SELECT id, email FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result)==0)
{
   header('location: login.php?credential_error=Incorrect Email or Password');
}
else
{
  $user = mysqli_fetch_array($result);
  $_SESSION['email']=$user['email'];
  $_SESSION['id']=$user['id'];
  header('location:products.php');
}
?>

