<?php
session_start();

//initialization of Global Variables (Session Variables), if not existing
if (!isset($_SESSION["username"])){
	$_SESSION["username"] = "anonymous_user";
}
if (!isset($_SESSION["login"])){
	$_SESSION["login"] = 0;
}
if (!isset($_SESSION["shopping_cart"])){
	$_SESSION["shopping_cart"] = 0;
}



//$_SESSION = array ();
//session_unset();
//session_destroy();

?>