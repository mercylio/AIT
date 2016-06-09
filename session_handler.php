<?php
session_start();

//initialization of Global Variables (Session Variables), if not existing
if (!isset($_SESSION["username"])){
	$_SESSION["username"] = "anonymous_user";
}
if (!isset($_SESSION["login"])){
	$_SESSION["login"] = 0;
}

if(empty($_SESSION["shopping_cart"])){
		$_SESSION["shopping_cart"] = array();
}

function display_username(){
	return $_SESSION["username"];
}

//$_SESSION = array ();
//session_unset();
//session_destroy();

?>