<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$search = "select * from users where email='$email'";
$result = mysqli_query($con, $search) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0)
{
    header('location:contact.php?email_error=Email not registered');
}
else{
$query = mysqli_real_escape_string($con,$_POST['query']);
$insert = "insert into queries(email,query,status) values('$email','$query','Pending')";
$submit = mysqli_query($con, $insert);
header('location:contact.php?received=true');
}
?>

