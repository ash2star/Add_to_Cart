<?php
session_start();
include("database.php");
$pid=$_POST['count2'];

$uid=$_SESSION['name'];
$query="delete from cart where pid='$pid'  and username='$uid' limit 1";
$result=mysqli_query($con,$query);
if(!$result){
	die("fhjk".mysqli_error($con));
}
header("location: mycart.php");
?>

