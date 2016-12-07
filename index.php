<!DOCTYPE html>
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
				<img src="images/logo.png" style="float: left; padding: 4px;" />
				<form  method="post" action="" id="form1" style="float: right; line-height: 80px;">
					<input type="text" name="email" placeholder="Email"/>
					<input type="password" name="pass" placeholder="*************"/>
					<button name="login">Login</button>
				</form>			
			</div>	
			<!--Header ends-->		
		</div>
		<!--Head wrap ends-->

		<div id="content">
			<div>
				<img src="images/background2.png" style="float:left; margin-right: 40px;"/>
			</div>
			<div>
				<form action="" method="post">
					<table>
						<tr>
							<td align="right">Name:</td>
								<td>
									<input type="text" name="u_name" placeholder="Enter Your Name"/>
								</td>
							</td>
						</tr>

						<tr>
							<td align="right">Password:</td>
								<td>
									<input type="text" name="u_email" placeholder="Enter Your Email"/>
								</td>
							</td>
						</tr>

						<tr>
							<td align="right">Email:</td>
								<td>
									<input type="text" name="u_name" placeholder="Enter Your Name"/>
								</td>
							</td>
						</tr>

						<tr>
							<td align="right">Country:</td>
								
								<td>
								<select name="u_country">
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
							<select name="u_gender">
									<option>Select a Gender</option>
									<option>Male</option>
									<option>Femaless</option>					
							</select>
							</td>
							</td>
						</tr>

						<tr>
							<td align="right">Date:</td>
								<td>
									<input type="date" name="u_bithday"/>
								</td>
							</td>
						</tr>

						<tr>
							<td>
								<button name="sign_up">Sign Up</button>
							</td>
						</tr>

					</table>
					
				</form>
			</div>
		</div>
	</div>
	<!--Container ends-->
</body>
</html>