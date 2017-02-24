<head>
		<link rel="stylesheet" type="text/css" href="style.css">

		
		<script>
		{
			function validateForm() {
    var x = document.forms["myform"]["email"].value;
    if (x == null || x == "") {
        alert("mail cannot be empty");
		document.myform.email.focus();
        return false;
    }
	
	 var y = document.forms["myform"]["password"].value;
    if (y == null || y == "") {
        alert("password cannot be empty");
		document.myform.password.focus();
        return false;
    }
	
	
}
			
	}
	
	
	</script>

		</head>

<body>
		<div id="Header">
			<br>
			<p><h1>Add_to_Cart.com</h1></p>
	<div id="firstdiv">
		<div style="margin-left:600px;">
			
		</div> 
		</div>
		</div>
		
		<div id="seconddiv">
			<div style="text-align:center; font-size:30px; color:#e1eaea;">			
			<strong>Sign in as admin to add products</strong>
		</div>	
			<div id="fourthdiv">
				<br><br>
				<form name ="myform" method="post" action="admin_verify.php" onsubmit="return validateForm()" >
				<table id="logintable" cellspacing="10">
					<tr>
						<td>Email: </td>
						<td> <input type="email" name="email" id="email" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td> <input type="password" name="password" id="password" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
					<td> </td>
					<td> <input type="submit" value="Login" style="height:30px; width:150px;" > &nbsp&nbsp&nbsp <input type="reset" value="clear" 
					style="height:30px; width:150px;"></td>
					</tr>
				</table>
				</form>
			</div>
	</div>	
	
	<?php
		
		if(@$_GET['n']==1){
			echo '<div style="text-align:center; font-size:20px; color:#660066;">
			<strong>Not a valid username & password....</strong>
		</div>';	
		}
		
		?>