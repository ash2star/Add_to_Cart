<?php
$connection = mysqli_connect("localhost","root","","addtocart") ;

if(!$connection){
	die("connection to database failed...!" . mysqli_error($connection));
}
$product_type= $_POST['value'];
//echo $product_type;
$sql = "select * from products where count = '$product_type'" ;

$result = mysqli_query($connection,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($connection));
}
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
	echo "<div id='product_spaces' style='float:left'>";
	
	echo "<table> <tr>";

	echo "<td colspan='2' style='padding-left:30px'><img style='width:400px;height:400px' src='".$row['image'] ."'/></td> </tr>";
	
	//echo "<tr> <td style='padding-left:10px'>product name:</td> <td> <a style='color:red'href='product_desc7.php?pid=".$row['count']."'> " .$row['pname']. " </a></p>" ;	
	echo"<tr> <td style='padding-left:10px'>product name:</td> <td> <span style='color:red' >".$row['pname']."</span>";
	
	echo "<tr> <td style='padding-left:10px'>cost:</td> "."<td style='padding-right:70px'>". $row['cost'] ." Rs</td> </tr>";
	echo " </tr></table>";
	echo "</div>";
	 echo 'Model: <font color="blue">'.$row['pname'].'</font><br><br><br>Description: <font color="blue">'.$row['desc'].'</font><br><br><br>
							Product type/ Brand: <font color="blue">'.$row['ptype'].' '.$row['btype'].'</font><br><br><br>Cost: <font color="blue">'.$row['cost'].'</font>';
							
echo"<br><br><br><form action='addcart.php' method='post'>
<input type='hidden' name='count' value='".$product_type."'>
<input type='submit' value='Add To Cart'>
</form>";							
}
}
else{
echo"asd";
}
?>
<div style=" float:left; width:100%">
	<h2 style="text-align:center; color:#000066;">REVIEWS</h2><br>
<?php 
include("database.php");

$sql="select * from reviews where product_id ='$product_type' ";
$result = mysqli_query($con,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($con));
}
if(mysqli_num_rows($result)>=0){
while($row = mysqli_fetch_assoc($result)){
	
echo $row['username'] ." : " .$row['review'] ."<br>";

} 
echo '<form action="review.php" method="post">';

	
echo '<input type="textarea" name="review">';
echo '<input type="submit" name="submit" value="Add Review">';
echo "<input type='hidden' value='".$product_type."' name='pid'>";
echo '</form>';
}
else{
	echo "adad";
}

?>
		</div>	
							
							