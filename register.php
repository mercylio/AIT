<?php

include 'session_handler.php';
/*
all fields mandatory, except Organization
email already exists
email: bad format / empty
(extra) Name, Surname, Address, Country: no only-numbers
*/

?>
<!DOCTYPE html>
<html>
<head>
<title>Honours Open Data - by StanLio</title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/login.css">
<link href="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.20/theme-default.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="reg-page">
  <div class="form">
    <form class="register-form" action="register_validation.php" method="POST" id="registration-form">
      <h3>Register new User</h3>
      <p>
        <input type="text" placeholder="email address" name="email" data-validation="email"/>
      </p>      
      <p>
        <input type="password" placeholder="password" name="password" data-validation="strength" data-validation-strength="2"/>
        <!-- <input type="password" placeholder="password" name="pass_confirmation" data-validation="strength" data-validation-strength="2"/> -->
      </p>
      <p>
        <input type="text" placeholder="name" name="name" data-validation="length" data-validation-length="2-128"/>
      </p>
      <p>
        <input type="text" placeholder="surname" name="surname" data-validation="length" data-validation-length="2-128"/>
      </p>
      <p>
        <input type="text" placeholder="organization (optional)" name="organization" data-validation="length" data-validation-length="max255"/>
      </p>
      <p>
        <input type="text" placeholder="address" name="address" data-validation="length" data-validation-length="1-128"/>
      </p>
      <p>
        <input type="text" placeholder="country"/ name="country" id="country" data-validation="country">
      </p>
      <!--<button type="submit">register</button>-->      
      <input type="submit" name="submitreg" value="Create" id="regsubmission"/>
      
      <!-- 
      on BUTTON click:
      1(validation): 
        LVL1: che  

      2(session destroy + session start)
      3 (if user doesn't exists yet, MySQL insert; else - USER EXISTS msg)
      4 (if everything wents smooth, go to downloads.php or homepage)
      -->
      <p class="message">Already registered? <a href="login.php">Sign In</a></p><br>
      <p class='messagehome'>Or return to <a href='index.php'>HOME PAGE</a></p>
    </form>
    <!-- VALIDATION of the FORM -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.43/jquery.form-validator.min.js"></script>
    <script>
    $.validate({

      modules : 'location, date, security, file, html5',
      onModulesLoaded : function() {
        $('#country').suggestCountry();
      }
    });
    // Restrict presentation length
    //$('#presentation').restrictLength( $('#pres-max-length') );
    </script>
  </div>
</div>
</body>
</html>