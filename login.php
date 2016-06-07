<?php

include 'session_handler.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.20/theme-default.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- FORM START HERE -->
<?php
if (isset($_SESSION["login"]) && ($_SESSION["login"] == 1)){ 
Print "
  <div class='login-page'>
  <div class='form'>
    <form class='login-form'>
      <button id='btnalreadylogin' disabled>login</button><h2>
        <div class='alreadylogin'>You are already logged-in!</div><br>
          <div class='alreadylogin'>Go back to <a href='index.php'>homepage</a></div>
    </form>
  </div>
</div>
";
}
else{
Print "
  <div class='login-page'>
  <div class='form'>
    <form class='login-form' action='login_validation.php' method='POST' id='registration-form'>
    <h3 id='loginmsg'>Welcome back!</h3>
      <p>
        <input type='text' placeholder='email address' name='email' data-validation='email'/>
      </p>
      <p>
        <input type='password' placeholder='password' name='password'/>
      </p>
        <!--<button>login</button>-->
        <input type='submit' name='submitreg' value='Login' id='regsubmission'/>
        <p class='message'>Not registered? <a href='register.php'>Create an account</a></p>
        <br>
        <p class='messagehome'>Or return to <a href='index.php'>HOME PAGE</a></p>

    </form>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js'></script>
    <script>
    $.validate({
      modules : 'location, date, security, file, html5'
    });
    </script>
  </div>
</div>
";

}
?>




</body>
</html>