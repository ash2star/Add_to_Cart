
<?php
include("database.php");


session_start();
$product=$_POST['pid'];



if(isset($_SESSION['name'])){
//echo $_SESSION('name');
$person_name=$_SESSION['name'];
$prod_review=$_POST['review'];
$sql="insert into reviews values('','$prod_review','$person_name','$product')";
$result = mysqli_query($con,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($con));
}
header('location:home.php');
}else{
	header("location: login.php");
}
//
?>