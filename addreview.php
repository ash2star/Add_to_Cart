<?php
include("header.php");
include("database.php");
session_start();

	/*echo '<div id="hcart" style="float:left; margin-left:40px;">
			<a href="mycart.php?uid='.$_SESSION['uid'].'">MyCart</a>
		</div>
<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div></div></div>';*/
		
if($_POST){

	//$pid=$_SESSION['pid'];
	$review=$_POST['review']; 
	//$uid=$_SESSION['uid'];
	//$authorize='N';
	$query="INSERT INTO reviews VALUES('','','')";
	mysqli_query($con,$query);
	
	}
		?>


<div id="seconddiv">
			<div style="text-align:center; font-size:30px; color:#660066;">
				<strong>Enter your review..</strong>
			</div>
			<div id="fourthdiv">
				<br><br>
				<form method="post" action="addreview.php">
				<table id="logintable" cellspacing="10">
					<tr>
						<td>Review: </td>
						<td> <input type="text" name="review" id="text" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
					<tr>
					<td> </td>
					<td> <input type="submit" value="Submit" style="height:30px; width:150px;" > &nbsp&nbsp&nbsp <input type="reset" value="clear" 
					style="height:30px; width:150px;"></td>
					</tr>
				</table>
				</form>
			</div>
	</div>	
	
	<?php 
	if($_POST){
		echo '<div style="text-align:center; font-size:16px; color:blue;"> Review sent for authorization</div>';
	}
		