<?php

include 'session_handler.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="reg-page">
  <div class="form">
    <form class="login-form">
    <?php
    if(isset($_POST)){

	if((empty($_POST['email'])) || empty($_POST['password'])){

		echo "Empty mail or password!<br> Login cancelled.<br><br><a href='index.php'>HOME PAGE</a>";
		
	}

	else {
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "password";
		$dbname = "USERS";
		$table = "Users";

		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		if (!$conn) {
		die('Could not connect: ' . mysql_error());
		}
		if (!mysql_select_db($dbname))
		die("Can't select database");


		$select = "SELECT `Email`, `Password` FROM `Users` WHERE `Email` LIKE '".$_POST['email']."' AND `Password` LIKE '".$_POST['password']."'";

		$result = mysql_query($select,$conn);

		if(mysql_num_rows($result) > 0){
			//login OK
			$_SESSION["username"] = $_POST['email'];
			$_SESSION["login"] = 1;
			$_SESSION["shopping_cart"] = 0;
			header("Location: datasets.php");
			exit;

		}
		else {
			echo "<h3>Email or Password not found. <a href='login.php'>Retry</a> or <a href='register.php'>Register</a>.</h3>";

		}

		/*
		function exists($resultone, $resulttwo){
			if(mysql_num_rows($resultone) > 0){

				if(mysql_num_rows($resulttwo) > 0)


			echo "Logged-in successfully! Welcome back, ".$_POST['email']
			$_SESSION

		}*/
	}
}
      	
	?>
    </form>
  </div>
</div>
</body>
</html>
