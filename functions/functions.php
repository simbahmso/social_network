<?php

$connection = mysql_connect("localhost","root","","social_network") or die("Simba says connection can NOT be established");

function InsertUser() {
	global $connection;

	if(isset($_POST['sign_up'])){
		$name = $_POST['u_name'];
		$pass = $_POST['u_pass'];
		$email = $_POST['u_email'];
		$country = $_POST['u_country'];
		$gender = $_POST['u_gender'];
		$b_day = $_POST['u_birthday'];
		$date = date("d-m-y");
		$status = "unverified";
		$posts = "No";

		$get_email = "SELECT * FROM users WHERE user_email='$email'";		
		$run_email = mysqli_query($this->connection, $get_email);
		$check = mysqli_num_rows($run_email);

		if($check==1){

			echo "<h2>This email is already registered!</h2>";
			exit();
		}
	}
}

?>