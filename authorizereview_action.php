<?php

include("database.php");
$rid=$_GET['rid'];
if($_GET['n']==1){
	$query="select * from reviews where rid='$rid'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	$time=$row['time'];
	$query="update reviews set authorize='Y',time='$time' where rid='$rid'";
	mysqli_query($con,$query);
	header("location: authorizereview.php");
}
else{
	$query="delete from reviews where rid='$rid'";
	mysqli_query($con,$query);
	header("location: authorizereview.php");
}
?>