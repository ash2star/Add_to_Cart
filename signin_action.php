<?php
include("database.php");

$query="select * from users";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
$count++;

$name=$_POST['fname'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO users VALUES('$count','$name','$email','$password')";
mysqli_query($con,$query);

header("location: login.php?r=1");

?>

