<?php

$con=mysqli_connect('localhost','root','','addtocart');
	
$email=$_POST['email'];
$password=$_POST['password'];

$query="Select * from admin where email='$email'";

$result=mysqli_query($con,$query);

if(@mysqli_num_rows($result)==0)
{
	header("location: admin_login.php?n=1");
}
else
{
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$uid=$row['uid'];
	$password1=$row['password'];
	if($password1!=$password){
		header("location: admin_login.php?n=1");
	}
	else{
	session_start();
	$_SESSION['name']=$name;
	header("location: addproduct.php");
	}
	
	
}
mysqli_close($con);
?>
