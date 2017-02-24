<?php
include("database.php");

session_start();
if(@mysqli_num_rows($result)==0)
{
	header("location: login.php?n=1");
}
else
{
	$row=mysqli_fetch_assoc($result);
	$name=$row['name'];
	$uid=$row['uid'];
	$password1=$row['password'];
	if($password1!=$password){
		header("location: login.php?m=1");
	}
	else{
	session_start();
	$_SESSION['name']=$name;
	$_SESSION['uid']=$uid;
	header("location: home.php");
	}
	
	
}

if(isset($_SESSION['name'])){
	
	$product_id= $_POST['count'];
	$username=$_SESSION['name'];
	
	$query="INSERT INTO cart VALUES('','$product_id','$username')";
mysqli_query($con,$query);
header("location: mycart.php");
}