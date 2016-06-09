<?php
include 'session_handler.php';

require("connect.php");

if ($_SESSION["login"] == 1){
	if(!in_array($_GET["id"], $_SESSION["shopping_cart"])){
		array_push($_SESSION["shopping_cart"], $_GET["id"]);

		header("Location: datasets.php?action=added&id".$_GET["id"]);


	}
	else{
	header("Location: datasets.php?action=exists&id".$_GET["id"]);
	}
}
else{
	header("Location: download.php");
}

?>