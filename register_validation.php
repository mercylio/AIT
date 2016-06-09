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
    <form class="register-form" action="register_validation.php" method="POST" id="registration-form">
    <?php

    if(isset($_POST)){

	if(empty($_POST['email'])){

		echo "Empty mail! Form rejected.<br><br><a href='index.php'>HOME PAGE</a>";
		//$_SESSION['errors']['email'] = "empty email";
	}
	//more IFs here
	/*

	if(empty($_POST['email'])){
		$_SESSION['errors']['email'] = "empty email";
	}
	*/

	/*
	if(count($_SESSION['errors']) > 0){
		//AJAX request
		if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&  strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                echo json_encode($_SESSION['errors']);
                exit;
        }

        //in case Javascript is turned off:
        echo "<ul>";
        foreach($_SESSION['errors'] as $key => $value){
	    	echo "<li>" . $value . "</li>";
        }
        echo "</ul>";exit;
	}
	else {
		//FORM VALIDATION has been successfull - now process the input data

		//if email already exists, return an error message or "GO BACK TO"
		echo "EMAIL already exists!";
		echo $_SESSION['errors'];
	}*/

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

		$select = "SELECT `Email` FROM `Users` WHERE `Email` LIKE '".$_POST['email']."'";
		/*I HAVE MYSQL's SYNTAX and its  ` '   DIFFERENCES!!!!!!!!!!! I've lost 2.5h with this stupid thing!!*/
		$result = mysql_query($select,$conn);

		
		//if email already exists, return an error message or "GO BACK TO"
		if(mysql_num_rows($result) > 0){
			echo "<div class='alreadylogin'>Email ".$_POST['email']." already registered!</div><br>";
			Print "<p class='messagehome'>Create another <a href='register.php'>account</a></p><br>
             <p class='messagehome'>Or return to <a href='index.php'>HOME PAGE</a></p>";
		}
		else {
			/*
			echo "<h1>Email AVAILABLE!!!!</h1>";
			echo $_POST['email'];*/
			$email = $_POST['email'];
			$password = $_POST['password'];
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$organization = $_POST['organization'];
			$address = $_POST['address'];
			$country = $_POST['country'];

			$sqlins = "INSERT INTO `Users` (`Email`, `Password`, `Name`, `Surname`, `Organization`, `Address`, `Country`) VALUES ('$email', '$password', '$name', '$surname', '$organization', '$address', '$country')";

			if (!mysql_query($sqlins,$conn)){
			  die('Error: ' . mysql_error());
			}

			//re-initialization of Global Variables (Session Variables)
			$_SESSION["username"] = $email;
			$_SESSION["login"] = 1;
			$_SESSION["shopping_cart"] = 0;


			echo "<h3>Congratulations, ".$_SESSION["username"]."!</h3>
      			<h4>You are now signed into the system</h4>";
      		Print "<p class='messagehome'>Go to the <a href='downloads.php'>DOWNLOADS</a></p>
      		<p class='messagehome'>Or return to <a href='index.php'>HOME PAGE</a></p>";
			//echo $_SESSION["login"];
			//echo $_SESSION["shopping_cart"];

			}
		}
	}
?>
</form>
</div>
</div>
</body>
</html>
