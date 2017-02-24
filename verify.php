<?php


$con=mysqli_connect('localhost','root','','addtocart');
	
$email=$_POST['email'];
$password=$_POST['password'];

$query="Select * from users where email='$email'";

$result=mysqli_query($con,$query);

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
mysqli_close($con);
?>
