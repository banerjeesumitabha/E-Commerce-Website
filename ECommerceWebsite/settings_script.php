<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
    header('location:index.php');
$old_password = $_POST['old_password'];
$new_password = $_POST['new_password'];
$new_password_retype = $_POST['new_password_retype'];
$user_id = $_SESSION['id'];
$query = "select * from users where id='$user_id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
if(md5($old_password)!=$row['password'])
{
    header('location:settings.php?error=Incorrect old password');
}
if(strlen($new_password)<6)
{
    header('location:settings.php?error=New password must be atleast 6 characters');
}
if($new_password!=$new_password_retype)
{
    header('location:settings.php?error=Please enter new password in both fields correctly');
}
$password = md5($new_password);
$query = "update users set password ='$password' where id='$user_id'";
$submit = mysqli_query($con, $query) or die(mysqli_error($con));
session_destroy();
header('location:login.php?reset=true');
?>

