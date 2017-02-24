<?php
$connection = mysqli_connect("localhost","root","","addtocart") ;

if(!$connection){
	die("connection to database failed...!" . mysqli_error($connection));
}


$product_type= $_POST['value'];
//echo $product_type;
$sql = "select * from products where ptype = '$product_type'" ;

$result = mysqli_query($connection,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($connection));
}
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
	echo "<div id='product_spaces' style='float:left'>";
	
	echo "<table> <tr>";

	echo "<td colspan='2' style='padding-left:30px'><img style='width:200px;height:200px' src='".$row['image'] ."'/></td> </tr>";
	
	echo "<tr> <td style='padding-left:10px'>product name:</td> <td> <a style='color:red'href='product_desc7.php?pid=".$row['count']."'> " .$row['pname']. " </a></p>" ;	
	echo "<tr> <td style='padding-left:10px'>cost:</td> "."<td style='padding-right:70px'>". $row['cost'] ." Rs</td> </tr>";
	echo" <td> <button class='details' id='".$row['count']."'> product description</button></td>";
	
	echo " </tr></table>";
	echo "</div>";
}
}
else{
	echo"asd";
}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

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


</script>