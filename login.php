<?php

include 'session_handler.php';

/*

LOGIN FORM


*/

?>
<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<!-- FORM START HERE -->
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <?php
     	if (isset($_SESSION["login"]) && ($_SESSION["login"] == 1)){
      		echo "<button id='btnalreadylogin' disabled>login</button><h2>";
			echo "<div class='alreadylogin'>You are already logged-in!</div><br>";
			echo "<div class='alreadylogin'>Go back to <a href='index.php'>homepage</a></div>";
		}
		else{
			print "<input type='text' placeholder='email address'/>
      		<input type='password' placeholder='password'/>";
			echo "<button>login</button>";
			echo "<p class='message'>Not registered? <a href='register.php'>Create an account</a></p>";
		}
      ?>
    </form>
  </div>
</div>

</body>
</html>