<?php
include("header.php");
session_start();
?>
<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div>

		<?php
		include("database.php");

//session_start();
//if(isset($_SESSION['name']))
		
		$username=$_SESSION['name'];
		
		$sql = "SELECT * FROM products a ,cart c where a.count=c.pid and c.username='$username'" ;

$result = mysqli_query($con,$sql) ;
$cost=0;
if(!$result){
	die("Select query failed" . mysqli_error($con));
}
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
	echo "<div id='product_spaces' style='float:left'>";
	
	//echo "<table> <tr>";

	echo "<td colspan='2' style='padding-left:30px'><img style='width:200px;height:200px' src='".$row['image'] ."'/><br></td> </tr>";
	
	//echo "<tr> <td style='padding-left:10px'>product name:</td> <td> <a style='color:red'href='desc.php?pid=".$row['count']."'> " .$row['pname']. " </a></p>" ;	
	//echo"<tr> <td style='padding-left:10px'>product name:</td> <td> <span style='color:red' >".$row['pname']."</span>";
	//echo "<tr> <td style='padding-left:10px'>cost:</td> "."<td style='padding-right:70px'>". $row['cost'] ." Rs</td> </tr>";
	////echo" <td> <button class='details' id='".$row['count']."'> product description</button></td>";
	

		
		echo 'Model: <font color="blue">'.$row['pname'].'</font><br><br><br>Description: <font color="blue">'.$row['desc'].'</font><br><br><br>
						Product type/ Brand: <font color="blue">'.$row['ptype'].' '.$row['btype'].'</font><br><br><br>Cost: <font color="blue">'.$row['cost'].'</font>';
						echo"<br><br><br><form action='remove.php' method='post'>
<input type='hidden' name='count2' value='".$row['pid']."'>
<input type='submit' value='Remove from Cart'>
</form>";							
$cost=$cost+$row['cost'];
						
		//				echo " </tr></table>";
	echo "</div>";

}
}
?>
<div>
<div style="width:500px; height:100px; margin-left:700px;"><font color="blue" style="font-size:20px">
						Total Cost: <?php echo '<font color="red" style="font-size:25px">'.$cost.'</font>'; ?></font><font color="blue" style="font-size:25px">/-</font><br><br>
						<a href="pay.php" class="start">Proceed to pay</a></div></div> 
							
		
