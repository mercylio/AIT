<?php

include 'session_handler.php';
$_SESSION = array ();
session_destroy();

?>
<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="login-page">
  <div class="form">
	<h1>You have been successfully logged-out!</h1><br>
	<h2>Go back to <a href='index.php'>homepage</a></h2>
  </div>
</div>

</body>
</html>