<head>
		<link rel="stylesheet" type="text/css" href="style.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

<script>
 $( document ).ready(function() {
$(".search1").click(function(){
	var x = $('.search').val();
	alert(x);
	$.ajax({
		type:"post",
		url:"heuristic1.php",
		data:"value="+x,
		success:function(result){
			//alert(result);
			$('#product_display').html(result);
		}
	});
	
	
});
 });
</script>
</head>
<body>
		<div id="Header">
			<br>
			<p><h1>MyCart.com</h1></p>
	<div id="firstdiv">
		<div id="mdiv1" style="float:left">
			<a href="home.php?parameter=1">Home</a>
			</div>
			<div  style="float:left">
		<span class="product" style="margin-left:20px;color:white">Phone</span>
		<span class="product" style="margin-left:20px;color:white">Laptop</span>
		<span class="product" style="margin-left:20px;color:white">Tablet</span>
		
		<span  style="margin-left:400px;color:yellow"><input style="width:400px;height:20px"type="text" class="search"> <button style="width:100px;height:20px"class="search1" value="search">Search</button></span>
		</div>

		</div> 
		</div>
		
		
	
</body>