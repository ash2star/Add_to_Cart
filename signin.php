<head>
		<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
		<div id="Header">
			<br>
			<p><h1>MyCart.com</h1></p>
	<div id="firstdiv">
		<div style="margin-left:600px;">
			<a href="home.php?parameter=1">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</div> 
		</div>
		</div>
		
		<div id="seconddiv">
			<div style="text-align:center; font-size:30px; color:#660066;">
			<strong>Please enter your details...</strong>
		</div>	
			<div id="fourthdiv">
				<br><br>
				<form method="post" action="signin_action.php">
				<table id="signintable" cellspacing="10">
					<tr>
						<td>First Name: </td>
						<td> <input type="text" name="fname" id="fname" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td> <input type="text" name="lname" id="lname" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td> M<input type="radio" name="radio1" id="radio1" >
								F<input type="radio" name="radio1" id="radio1" ></td>
					</tr>
					<tr>
						<td>Mobile no: </td>
						<td> <input type="text" name="mno" id="mno" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td> <input type="email" name="email" id="email" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td> <input type="password" name="password" id="password" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Retype Password: </td>
						<td> <input type="password" name="password1" id="password1" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td><img src="captcha.php"></td>
						<td><input class="textbox" type="text" name="code" style="height:30px; padding:auto;">Enter the captcha code</td>
					</tr>
					<tr>
					<td> </td>
					<td> <input type="submit" value="Submit" style="height:30px; width:150px;" > &nbsp&nbsp&nbsp <input type="reset" value="clear" 
					style="height:30px; width:150px;"></td>
					</tr>
				</table>
				</form>
			</div>
	</div>	
	
	<?php include("footer.php");
	