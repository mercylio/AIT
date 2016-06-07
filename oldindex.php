<?php
include 'session_handler.php';


if (isset($_GET["login"]) && ($_GET["login"] == "login")){
	$_SESSION["login"] = 1;
}
if (isset($_GET["login"]) && ($_GET["login"] == "logout")){
	$_SESSION["login"] = 0;
}


/*
//if user is logged in, display name
if(isset($_SESSION["username"])){ //check also $_SESSION["login"] ?

	//display name somewhere in the page

}
//else, session_start();
else {
	session_start();
	$_SESSION["login"] = 0;
}
*/

?>

<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
</head>
<body>

<?php
echo "<h1>".$_SESSION["login"]."</h1><br>";
echo "<h1>".$_SESSION["username"]."</h1><br>";
echo "<h1>".$_SESSION["shopping_cart"]."</h1><br>";
echo "<h1> USERNAME: ".display_username()."</h1>";
?>


<a href="index.php?login=login">Click here to set login 1</a>
<a href="index.php?login=logout">Click here to set login 0</a><br><br><br>
<a href="login.php" class="button">login.php</button><br>
<a href="logout.php" class="button">logout.php</button><br>
<a href="register.php" class="button">register.php</button><br>
</body>
</html>

<!-- 

TODO: 



-->
