<?php

include 'session_handler.php';

// PAY ATTENTION to the value of $dbuser and $dbpass: it must match machine's DB username and password
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

?>