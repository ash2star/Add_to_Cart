<?php 
include("header.php");
include("database.php");
?>

<div id="mdiv3">
			<a href="logout.php">Logout</a>
		</div>
		</div>

</div></div>
<?php
$i=1;
$query="select * from reviews where authorize='N'";

$result=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($result);
while($i<=$rowcount) :
				$row=mysqli_fetch_assoc($result);
				$rid=$row['rid'];
				$id1=$row['uid'];
				$query1="select * from users where uid='$id1'";
				$result1=mysqli_query($con,$query1);
				$row1=mysqli_fetch_assoc($result1);
				$name=$row1['name'];
				$id2=$row['pid'];
				$query2="select * from Products where Pid='$id2'";
				$result2=mysqli_query($con,$query2);
				$row2=mysqli_fetch_assoc($result2);
				$name1=$row2['pname'];?>
	<div style="text-align:center; height:170px; width:100%; color:red; font-size:18px; ">
	 Name: <?php echo $name; ?>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $row['time']; ?><br>
	 Product: <?php echo $name1; ?><br>
	Review: <?php echo $row['review']; ?><br>
	<div style="margin-left:550px; float:left;"><?php echo '<a  align="center" href="authorizereview_action.php?rid='.$rid.'&n=1"style="display:inline-block; background:yellow; color:black; padding:6px 13px;
						border:1px dotted #ccc; border-radius:5px; font-size:20px;  ">Accept</a>'; ?></div>
						<div style="margin-left:50px; float:left;"><?php echo '<a  align="center" href="authorizereview_action.php?rid='.$rid.'&n=0"style="display:inline-block; background:yellow; color:black; padding:6px 13px;
						border:1px dotted #ccc; border-radius:5px; font-size:20px;  ">Reject</a>'; ?></div></div>
	<?php  $i++; endwhile; ?>
	
	