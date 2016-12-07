<!DOCTYPE html>

<?php
include("functions/functions.php"); 
?>

<html>
	<head>
		<title>My Social Network</title>
		<link rel="stylesheet" href="styles/style.css">
	</head>	
<body>
	<!--Container starts-->
	<div class="container">
		<!--Head wrap starts-->
		<div id="head_wrap">
			<!--Header starts-->
			<div id="header">
				<img src="images/logo7.png" href="#" style="float: left; padding: 4px;" />
				<form  method="post" action="" id="form1" style="float: right; line-height: 80px;">
					<strong>Email:</strong>
					<input type="email" name="email" placeholder="Email" required="required" />
					<strong>Password:</strong>
					<input type="password" name="pass" placeholder="*************" required="required"/>
					<button name="login">Login</button>
				</form>			
			</div>	
			<!--Header ends-->	
		</div>
		<!--Head wrap ends-->

		<!--Content area starts-->
		<div id="content">
			<div>
				<img src="images/background4.png" style="float:left; margin-left: -65px;"/>
			</div>
			<div id="form2">
				<form action="" method="post">
				<h2>       Sign Up Today</h2>
					<table>
						<tr>
							<td align="right">Name:</td>
								<td>
									<input type="text" name="u_name" placeholder="Enter Your Name" required="required"/>
								</td>
							</td>
						</tr>

						<tr>
							<td align="right">Password:</td>
								<td>
									<input type="password" name="u_pass" placeholder="Enter Your Password" required="required"/>
								</td>
							</td>
						</tr>

						<tr>
							<td align="right">Email:</td>
								<td>
									<input type="email" name="u_email" placeholder="Enter Email" required="required"/>
								</td>
							</td>
						</tr>

						<tr>
							<td align="right">Country:</td>
								
								<td>
								<select name="u_country" required="required">
									<option>Select a Country</option>
									<option>Canada</option>
									<option>China</option>
									<option>India</option>
									<option>United Staes</option>		
									<option>United Arab Emirates</option>					
								</select>
								</td>
								            
							</td>
						</tr>

						<tr>
							<td align="right">Gender:</td>
							<td>
							<select name="u_gender" required="required">
									<option>Select a Gender</option>
									<option>Male</option>
									<option>Female</option>					
							</select>
							</td>
							</td>
						</tr>

						<tr>
							<td align="right">Date:</td>
								<td>
									<input type="date" name="u_birthday"/>
								</td>
							</td>
						</tr>

						<tr>
							<td colspan="6"> 
								<button name="sign_up">Sign Up</button>
							</td>
						</tr>
					</table>					
				</form>
				<?<?php InsertUser(); ?>
			</div>
		</div>
		<!--Content area ends-->

		<div id="footer">
			<h2>&copy; 2017 - www.simbalabs.com</h2>
		</div>

	</div>
	<!--Container ends-->
</body>
</html>