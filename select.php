<?php
$connection = mysqli_connect("localhost","root","","addtocart") ;

if(!$connection){
	die("connection to database failed...!" . mysqli_error($connection));
}


$product_type= $_POST['value'];
// wrt
echo"<input type='hidden' id='type' value='$product_type'>";
$sql = "select distinct btype from products where ptype = '$product_type'" ;

$result = mysqli_query($connection,$sql) ;

if(!$result){
	die("Select query failed" . mysqli_error($connection));
}
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
	//echo "<div id='product_spaces' style='float:left'>";
	
	echo"<input type='radio' class='brand abc' name='phone' value='".$row['btype']."'/><label>".$row['btype']."<br></label>";
	

	
	//echo "</div>";
}

}
echo"<p>    &nbsp&nbsp&nbsp&nbspPrice Range:</p>"; 
echo "<p><input type='checkbox' name='check' class='brand' value='10000 AND 20000'> 10000 - 20000 </p>";
echo "<p><input type='checkbox' name='check' class='brand' value='20000 AND 30000'> 20000 - 30000 </p>";
echo "<p><input type='checkbox' name='check' class='brand' value='30000 AND 40000'> 30000 - 40000 </p>";

echo "<p><input type='checkbox' name='check' class='brand' value='40000 AND 50000'> 40000 - 50000 </p>";

?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>-->
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


$(".brand").click(function(){
	
	alert("abc");
	var x = document.getElementById("type").value;
	alert(x);
	var z = $('.abc:checked').val();
	alert(z);
	var node = document.getElementsByName('check');
	var y=''; 
	for(var j=0;j<node.length;j++){
		if(node[j].checked){
			y +=node[j].value+",";
			alert(y);
		}
	}
	

	
	
	$.ajax({
		type:"post",
		url:"page.php",
		data:"value1="+x+"&value2="+y+"&value3="+z,
		success:function(result){
			//alert(result);
			$('#product_display').html(result);
		}
	});
	
	
	
	
	 
	
	
});


</script>