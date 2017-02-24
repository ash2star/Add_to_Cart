<?php
session_start();

$array=array(1111111111111111,1010101010101010,0101010101010101);

$cno=$_POST['cno'];
foreach($array as $value){
	if($value==$cno)
		$set=1;
}
if(@$set==1 && $_POST["code"]==$_SESSION['vercode'])
{
	include("header.php");
	echo '<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div></div></div>';

			echo '<div style="text-align:center; font-size:30px; color:#660066;">
			<strong>Your order has been placed.<br><br>Thankyou for choosing us.</strong>
		</div>';

} 
else if(@$set!=1){
	include("header.php");
	echo '<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div></div></div>';

			echo '<div style="text-align:center; font-size:30px; color:#660066;">
			<strong>Please check your card number.</strong>
		</div>';
}
else{
	include("header.php");
	echo '<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div></div></div>';

			echo '<div style="text-align:center; font-size:30px; color:#660066;">
			<strong>Please reenter the captcha code.</strong>
		</div>';
}

?>

