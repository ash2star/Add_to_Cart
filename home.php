<?php
include("header.php");
session_start();
?>
<?php 
if(isset($_SESSION['name'])){
	echo '<div id="hcart" style="float:left; margin-left:40px;">
			<a href="mycart.php?uid='.$_SESSION['uid'].'"><font color="black">MyCart</a>
		</div>
<div id="hlogout" style="float:right; margin-right:50px">
			<a  href="logout.php"><font color="black">Logout</a>
		</div>';
		echo '</div></div><div style="text-align:center; font-size:25px; color:#660066;"><h2>Welcome '.$_SESSION['name'].'...!!!!!</h2></div>'; 
}
else{
echo '<div id="hdiv2">
			<a href="login.php"><font color="black">Login</a>
		</div>
<div id="hdiv3">
			<a href="Signin.php"><font color="black">Sign up</a>
		</div>';
		
}		?>


<?php 
/*include("database.php");

$i=1;/*
$parameter=1;
@$parameter=$_GET['parameter'];
$fe=1;
$query="select * from products";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
for($k=1;$k<$parameter;$k++)
	$fe=$fe+5;
	$be=$fe+5; */
/*$query="select * from Products ";

$result=mysqli_query($con,$query);
$rowcount=mysqli_num_rows($result);

*/
?>
<div id="select"  style="height:800px; width:200px; border:1px solid gray; float:left;margin-left:50px ">
<!--<div  style="height:150px; width:300px; border:1px solid gray;  ">
<a> <font color="black">Select brand</a>
<li> Samsung</li>
 <li> Apple</li>
 <li>Nokia</li>

</div>
<div  style="height:150px; width:300px; border:1px solid gray;  ">
<a><font color="black"> Select price range </a>
<li></li>

  </div>-->
  </div>

<?php 
	/*	while($i<=$rowcount) :
				$row=mysqli_fetch_assoc($result);?>
												<div align="center" class="innerdivs" style="height:350px; width:320px; border:1px solid gray; float:left; ">
						<div style="text-align:center;"><img src="<?php echo $row['image']; ?>" height="300px" width="100%" align="center" ></div><br><div>
							<?php echo	'<u><a class="links" href="desc.php?id='.$row['ptype'].'">'.$row['btype'].''.$row['cost'].' '.$row['pname'].'</a></u></div></div>'; ?>
	
	<?php  $i++; endwhile; */?>
	
<!--<div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>-->	
<div id="product_display" style="float:left;border:1px solid black;width:900px;height:auto;margin-left:100px">
<?php

$connection = mysqli_connect("localhost","root","","addtocart") ;

if(!$connection){
	die("connection to database failed...!" . mysqli_error($connection));
}

$sql = "SELECT * FROM products" ;

$result = mysqli_query($connection,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($connection));
}
while($row = mysqli_fetch_assoc($result)){
	echo "<div id='product_spaces' style='float:left'>";
	
	echo "<table> <tr>";

	echo "<td colspan='2' style='padding-left:30px'><img style='width:200px;height:200px' src='".$row['image'] ."'/></td> </tr>";
	
	//echo "<tr> <td style='padding-left:10px'>product name:</td> <td> <a style='color:red'href='desc.php?pid=".$row['count']."'> " .$row['pname']. " </a></p>" ;	
	echo"<tr> <td style='padding-left:10px'>product name:</td> <td> <span style='color:red' >".$row['pname']."</span>";
	echo "<tr> <td style='padding-left:10px'>cost:</td> "."<td style='padding-right:70px'>". $row['cost'] ." Rs</td> </tr>";
	echo" <td> <button class='details' id='".$row['count']."'> product description</button></td>";
	echo " </tr></table>";
	echo "</div>";
}


?>
</div>
	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<!--<script src="jquery-3.0.0.min.js"></script>-->

<script>

$(".details").click(function(){
	var prod_desc=$(this).attr('id');
	alert(prod_desc);
$.ajax({
		type:"post",
		url:"prod_desc.php",
		data:"value="+prod_desc,
		success:function(result){
			//alert(result);
			$('#product_display').html(result);
		}
	});
		
});
	


$(".product").click(function(){
	var x = $(this).html();
	alert(x);
	$.ajax({
		type:"post",
		url:"selective_product.php",
		data:"value="+x,
		success:function(result){
			//alert(result);
			$('#product_display').html(result);
		}
	});
	$.ajax({
		type:"post",
		url:"select.php",
		data:"value="+x,
		success:function(result){
			//alert(result);
			$('#select').html(result);
		}
	});

	
});


</script>

</body>
</html>
	