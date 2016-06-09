<?php

// change the value of $dbuser and $dbpass to your username and password
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

/*
function display_username(){
	return $_SESSION["username"];
}
*/



$result = mysql_query("SHOW TABLES");
if (!$result) {
die("Query to show fields from table failed");
}
$num_row = mysql_num_rows($result);
echo "<h1>Choose one table:<h1>";
echo "<form action=\"showtable.php\" method=\"POST\">";
echo "<select name=\"table\" size=\"1\" Font size=\"+2\">";
for($i=0; $i<$num_row; $i++) {
$tablename=mysql_fetch_row($result);
echo "<option value=\"{$tablename[0]}\"
>{$tablename[0]}</option>";
}
echo "</select>";
echo "<div><input type=\"submit\" value=\"submit\"></div>";
echo "</form>";
mysql_free_result($result);
mysql_close($conn);
?>