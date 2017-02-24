<?php
include("database.php");

$query="select * from products";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
$count++;

$pname=$_POST['pname'];
$cname=$_POST['cname'];
$ptype=$_POST['ptype'];
$btype=$_POST['btype'];
$desc=$_POST['desc'];
$cost=$_POST['cost'];
$image='images/'.$_FILES["image"]["name"];

$query="INSERT INTO Products VALUES('$count','$pname','$cname','$ptype','$btype','$image','$desc','$cost')";
mysqli_query($con,$query);

if($_FILES["image"]["error"]>0)
{
	echo "error:".$_FILES["image"]["error"]."<br>";
}
else
{
	move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
}

header("location: addproduct.php?n=1");

?>