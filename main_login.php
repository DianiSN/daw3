<?php
	session_start();
?>
<form name="form3" method="post" action="checkface.php">
<div id="fbname" name="fbname" hidden></div>
<div id="fbid" name="fbid" hidden></div>
<div id="fbemail" name="fbemail" hidden></div>
<div id="fbstat" name="fbstat" hidden></div>
</form>


<link rel="stylesheet" type="text/css" href="style2.css"/>

<div id="loginform">
<div id="facebook"><i class="fa fa-facebook"></i><div id="connect">Connect with Facebook</div>

<script src="fb.js"></script>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
</div>

<div id="mainlogin">
<div id="or">or</div>
<h1>CompraTodo</h1>
<form method="post" action="checklogin.php">
<input name="myusername" id="myusername" type="text" placeholder="username" value="" required>
<input name="mypassword" id="mypassword" type="password" placeholder="password" value="" required>
<button type="submit"><i class="fa fa-arrow-right">Login</i></button>
</form>
</div>
</div>
<form name="form2" method="post" action="register.php">
<td><input type="submit" name="Registrate!" value="Registrate!"></td>
</form>
<td>
</div>
</td>