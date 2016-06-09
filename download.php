<?php
include 'session_handler.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>App by STANLIO</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" type="text/css" media="screen,projection" href="css/master.css" />
</head>
<body>
<?php

//you must be logged in firts!
if ($_SESSION["login"] == "0"){
	echo "<h2>Dear ".$_SESSION["username"].", you must be logged-in to proceed.<h2>";
	echo "<a href='login.php' class='button'>Login here</button><br>";
}
//else, display shopping cart summary
else{

	echo "<h2>Welcome back, ".$_SESSION["username"]."!<h2>";

	//Testinggggg
	/*
	echo "<div>";
	echo "Login status: ".$_SESSION["login"]."<br>";
	echo "USERNAME: ".display_username()."<br>";	
	echo "NOW, all session<br>";
	*/

	//if 0 downloads in the shopping cart
	if(empty($_SESSION["shopping_cart"])){
		echo "<h2>You don't have any downloads..!</h2><br>
		<h2>Go back to the <a href='datasets.php'><strong>DATASETS</strong></a>.</h2>";
	}

	else {
		echo "Your Cart contains <strong>".count($_SESSION['shopping_cart'])."</strong> downloads<br>";
		//START HTML
		Print "
		<div id='navigation'>
	  	<ul>
	    <li><a href='datasets.php'>Back</a></li>
	    <li><a href='logout.php'>Logout</a></li>
	  	</ul>
		</div>
		";

		echo "<table><thead></thead><tbody>";
		echo "<tr>";
		foreach ($_SESSION["shopping_cart"] as $value) {
			echo "<td>".$value."</td>";
			echo "<td><a href='downloadit.php?id=".$value."'><strong>Direct Download</strong></a></td>";
			echo "<td><a href='downloadit.php?remove=".$value."'>Remove</a></td></tr>";
		}
		Print "
		<td><strong>"."</strong></td>
		<td></td>
		<td><a href='downloadit.php?removeAll'>Remove ALL</a></td></tr>";
		echo "</tbody></table></div>";
	}
}
?>
</body>
</html>