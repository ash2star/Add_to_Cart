<?php 
include("header.php");
?>
<head>
<script>
		
			function validateForm() {
    var x = document.forms["myform"]["pname"].value;
    if (x == null || x == "") {
        alert("product name cannot be empty");
		document.myform.pname.focus();
        return false;
    }
	
	 var y = document.forms["myform"]["cname"].value;
    if (y == null || y == "") {
        alert("City name  cannot be empty");
		document.myform.cname.focus();
        return false;
    }
	var z = document.forms["myform"]["ptype"].value;
    if (z == null || z == "") {
        alert("Product type name  cannot be empty");
		document.myform.ptype.focus();
        return false;
    }
	var a = document.forms["myform"]["btype"].value;
    if (a == null || a == "") {
        alert("Brand type  cannot be empty");
		document.myform.btype.focus();
        return false;
    }
	var b = document.forms["myform"]["desc"].value;
    if (b == null || b == "") {
        alert("Product Description  cannot be empty");
		document.myform.desc.focus();
        return false;
    }
	var c = document.forms["myform"]["cost"].value;
    if (c == null || c == "") {
        alert("Cost  cannot be empty");
		document.myform.cost.focus();
        return false;
    }
	var filename = document.forms["myform"]["image"].value;
	var length = filename.length;
	var x = filename.lastIndexOf(".");
	var y = x+1;
	var z = filename.substring(y,length);
	if(z=="jpg"||z=="png"||z=="gif")
	{
		return true;
	}
	else{
		alert("Select image file only");
   return false;
	}
 	
}
			
			
			function brand_type(value)
			{
				
				if(value=="Phone")
				{
				var a ="<option value='Samsung'>Samsung</option><option value='Apple'>Apple</option><option value='Nokia'>Nokia</option>";
				}
                else if(value=="Tablet")
				{var a ="<option value='Apple'>Apple</option><option value='Nokia'>Nokia</option>";}
                else{
				var a ="<option value='Dell'>Dell</option><option value='hp'>hp</option>";}
			document.getElementById("btype").innerHTML = a;
			}			
			
	
	
	
	</script>



</head>
<div id="mdiv3">
			<a href="logout.php">Logout</a>
		</div>
		<div id="mdiv6">
			&nbsp&nbsp&nbsp<a href="authorizereview.php">Authorize review</a>
		</div>

</div></div>

	<div id="seconddiv">
		<div id="thirddiv"><h3> Admin Panel </h3></div>
			<div id="fourthdiv">
			<br>
				<form name="myform" action="addproduct_action.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
				<table id="admintable" cellspacing="10">
					<tr>
						<td>Product name: </td>
						<td> <input type="text" name="pname" id="pname" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>City name: </td>
						<td> <input type="text" name="cname" id="cname" style="height:30px; padding:auto; width:100%;"></td>
					</tr>	
					<tr>
						<td>Product  type: </td>
						<td> <select name="ptype" id="ptype" onchange="brand_type(this.value)"style="height:30px; padding:auto; width:100%;">
									<option value="">Select Product type</option>
									<option value="Phone">Phone</option>
									<option value="Tablet">Tablet</option>
									<option value="Laptop">Laptop</option>
								</select></td>										
					</tr>
					<td>Brand  type: </td>
						<td> <select name="btype" id="btype" style="height:30px; padding:auto; width:100%;">
									<!-- <option value="">Select Brand type</option>
									<option value="Samsung">Samsung</option>
									<option value="Apple">Apple</option>
									<option value="Nokia">Nokia</option>
									<option value="Dell">Dell</option>
									<option value="hp">hp</option> -->
								</select></td>										
					</tr>
					<tr>
						<td>Upload image: </td>
						<td> <input type="file" name="image" id="image" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Product Desc: </td>
						<td> <input type="text" name="desc" id="desc" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Cost: </td>
						<td> <input type="text" name="cost" id="cost" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
					<td> </td>
					<td> <input type="submit" value="Add Product" style="height:30px; width:150px;">&nbsp&nbsp&nbsp <input type="reset" value="clear"
					style="height:30px; width:150px";></td>
					</tr>
				</table>
				</form>
			</div>
	</div>	
	<br><br>
<?php 
if(@$_POST['n']){
	echo "<h3 align='center'> Product added successfully. </h3>";
}
include("footer.php");
?>
	
	</body>
	</html>
	