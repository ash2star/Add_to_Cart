<?php
include("header.php");
session_start();
?>
<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div></div></div> 
		
<?php		
include("database.php");
@$id=$_SESSION['uid'];
$query="select * from carts where uid='$id' ";
$i=1;
$cost=0;
$result=mysqli_query($con,$query);		
$rowcount=mysqli_num_rows($result);
$row1=mysqli_fetch_assoc($result);
?>	
<?php if($rowcount>0){
while($i<=$rowcount) :
				$row1=mysqli_fetch_assoc($result);
				$pid=$row1['pid'];
				 $query1="select * from products where Pid='$pid'";
				 $result1=mysqli_query($con,$query1);		
				 $row=mysqli_fetch_assoc($result1);
				 $cost=$cost+$row['cost']; ?>
				<div style="height:550px;">
				<div align="center" style="height:500px; width:500px; border:1px solid gray; float:left; ">
						<div style="text-align:center;"><img src="<?php echo $row["image"]; ?>" height="100%" width="100%" align="center" ></div></div>
						
						<div style="float:left; margin-left:100px; height:300px; width:600px; text-align:center; font-size:30px; color:#660066;">
							<?php echo 'Model: <font color="blue">'.$row['pname'].'</font><br><br><br>Description: <font color="blue">'.$row['desc'].'</font><br><br><br>
							Product type/ Brand: <font color="blue">'.$row['ptype'].' '.$row['btype'].'</font><br><br><br>Cost: <font color="blue">'.$row['cost'].'</font>';?> 
							<br><br><br><br>
						<div style="width:500px; height:100px; margin-left:330px;"><font color="blue" style="font-size:20px">
							<a href="remove.php?id=<?php echo $pid; ?>" class="start" style="background:yellow;">Remove from cart</a> </div> </div></div>
				<?php  $i++; endwhile; ?>
						<div>
						<div style="width:500px; height:100px; margin-left:700px;"><font color="blue" style="font-size:20px">
						Total Cost: <?php echo '<font color="red" style="font-size:25px">'.$cost.'</font>'; ?></font><font color="blue" style="font-size:25px">/-</font><br><br>
						<a href="pay.php" class="start">Proceed to pay</a></div></div><br><br>
</div><?php }
			else{
				echo '<div style="text-align:center; font-size:30px; color:#660066;">
					<strong>Sorry, your cart is empty.... :-(</strong><br><br><br>
				</div>';
			}
			?>

			<?php include("footer.php"); ?>			