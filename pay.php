<?php
include("header.php");
?>

<div id="hlogout" style="float:right; margin-right:50px;">
			<a href="logout.php">Logout</a>
		</div></div></div>
		
		<div id="seconddiv">
		<div style="text-align:center; font-size:30px; color:#660066;">
			<strong>Welcome to mybank payment gateway..</strong>
		</div>
		<div id="thirddiv"><h3> Enter your payment details..</h3></div>
			<div id="fourthdiv">
			<br>
				<form action="pay_action.php" method="post">
				<table id="paytable" cellspacing="10">
					<tr>
						<td>Card type: </td>
						<td> <select name="ctype" id="ctype" style="height:30px; padding:auto; width:100%;">
									<option value="">Select Card type</option>
									<option value="Mobile">Credit</option>
									<option value="Tablet">Debit</option>
									<option value="Laptop">Gift</option>
								</select></td>										
					</tr>
					<tr>
						<td>Card No: </td>
						<td> <input type="text" name="cno" id="cno" style="height:30px; padding:auto; width:100%;"></td>
					</tr>	
					<tr>
						<td>Enter pin: </td>
						<td> <input type="password" name="pin" id="pin" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Expiry date </td>
						<td> <input type="date" name="date" id="date" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>CardHolder name: </td>
						<td> <input type="text" name="cname" id="cname" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td>Mobile no: </td>
						<td> <input type="text" name="mno" id="mno" style="height:30px; padding:auto; width:100%;">
					<span style="color:#D8D8D8;">We will send you a verification code</span></td>
					</tr>
					<tr>
						<td>Verification code: </td>
						<td> <input type="text" name="cname" id="cname" style="height:30px; padding:auto; width:100%;"></td>
					</tr>
					<tr>
						<td><img src="captcha.php"></td>
						<td><input class="textbox" type="text" name="code"></td>
					</tr>
					<tr>
					<td> </td>
					<td> <input type="submit" value="Pay now" style="height:30px; width:150px; background:yellow;">&nbsp&nbsp&nbsp <input type="reset" value="clear"
					style="height:30px; width:150px; background:yellow;"></td>
					</tr>
				</table>
				</form>
			</div>
	</div>	
	