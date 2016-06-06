<?php

session_start();

//initialization of Global Variables (Session Variables), if not existing
if (!isset($_SESSION["username"])){
	$_SESSION["username"] = "anonymous user";
}
if (!isset($_SESSION["login"])){
	$_SESSION["login"] = 0;
}
if (!isset($_SESSION["shopping_cart"])){
	$_SESSION["shopping_cart"] = 0;
}


if (isset($_GET["login"]) && ($_GET["login"] == "login")){
	$_SESSION["login"] = 1;
}

if (isset($_GET["login"]) && ($_GET["login"] == "logout")){
	$_SESSION["login"] = 0;
}


//$_SESSION = array ();
//session_unset();
//session_destroy();

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
<body>

<?php
echo "<h1>".$_SESSION["login"]."</h1><br>";
echo "<h1>".$_SESSION["username"]."</h1><br>";
echo "<h1>".$_SESSION["shopping_cart"]."</h1><br>";
?>


<a href="index.php?login=login">Click here to set login 1</a>
<a href="index.php?login=logout">Click here to set login 0</a>

</body>
</html>