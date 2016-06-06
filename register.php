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
<link rel="stylesheet" type="text/css" href="css/login.css">
<!--
<style type="text/js">
caption.addEvent(window, "load", function() { caption.init(); } );

$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</style>
-->
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="reg-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="email address"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="name"/>
      <input type="text" placeholder="surname"/>
      <input type="text" placeholder="organization"/>
      <input type="text" placeholder="address"/>
      <input type="text" placeholder="country"/>
      <button>create</button>
      <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>