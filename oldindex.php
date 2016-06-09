<?php
include 'session_handler.php';

/*
if (isset($_GET["login"]) && ($_GET["login"] == "login")){
	$_SESSION["login"] = 1;
}
if (isset($_GET["login"]) && ($_GET["login"] == "logout")){
	$_SESSION["login"] = 0;
}
*/

?>

<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php
echo "<h1>Login status: ".$_SESSION["login"]."</h1><br>";
echo "<h1> USERNAME: ".display_username()."</h1><br>";	
echo "NOW, all session<br>";

foreach ($_SESSION["shopping_cart"] as $value) {
	echo "__<strong>". $value."</strong><br>";
}
?>


<a href="index.php?login=login">Click here to set login 1</a>
<a href="index.php?login=logout">Click here to set login 0</a><br><br><br>
<a href="login.php" class="button">login.php</a><br>
<a href="logout.php" class="button">logout.php</a><br>
<a href="register.php" class="button">register.php</a><br>
<ul>
<li>
<a href="add_to_download.php?id=BD2008" class="button">ADD onto $_SESSION["shopping_cart"]</a><br>
<?php

?>

</li>
</ul>
</body>
</html>
