<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password =  $_POST['password'];
$contact = $_POST['contact'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    header('location:signup.php?error=Please enter correct email format');
}
if (strlen($password)<6)
{
    header('location:signup.php?error=Password must be atleast 6 characters');
}

if (strlen($contact)<8)
{
    header('location:signup.php?error=Contact must be atleast 8 characters');
}
$name = mysqli_real_escape_string($con,$_POST['name']);
$password = md5($_POST['password']);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$registration_query = "insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
$registration_submit = mysqli_query($con, $registration_query)
        or die(mysqli_error($con));
$_SESSION['id'] = mysqli_insert_id($con);
$_SESSION['email'] = $email;
header('location:products.php');
?>

