<?php

include("database.php");
 session_start();
 $uid=$_SESSION['uid'];
 $Pid=$_GET['id'];
 
 echo $_SESSION['uid'];
$query="insert into carts values('$uid','$Pid') ";

mysqli_query($con,$query);	

header("location: desc.php?added=1&id=".$Pid);	
?>