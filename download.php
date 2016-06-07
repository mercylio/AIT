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
if (isset($_SESSION["login"]) && ($_SESSION["login"] == "0")){
	echo "<h2>Dear ".$_SESSION["username"].", you must be logged-in to proceed.<h2>";
	echo "<a href='login.php' class='button'>Login here</button><br>";
}
//else, display shopping cart summary
else{

	echo "<h2>Welcome back, ".$_SESSION["username"]."!<h2>";
	//LOGOUT BUTTON


}



?>

</body>
</html>