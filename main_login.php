<?php
	session_start();
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Compra Todo</title>
<p>
<body>
	<div class="logo-image" align="middle" >
		<img  align="middle" src="imagenes/logo2.png" width="150" height="230" border="0" alt="CompraTodo" /></a>
		<img  align="middle" src="imagenes/bienvenido.png" width="580" height="100" border="0" alt="Bienvenido" /></a>

	</div>
</p>

<form name="form3" method="post" action="checkface.php">
<div id="fbname" name="fbname" hidden></div>
<div id="fbid" name="fbid" hidden></div>
<div id="fbemail" name="fbemail" hidden></div>
<div id="fbstat" name="fbstat" hidden></div>
</form>


<br>
<br>
<link rel="stylesheet" type="text/css" href="style2.css"/>

<div id="loginform">
<div id="facebook"><i class="fa fa-facebook"></i><div id="connect">Connect with Facebook</div>

<script src="fb.js"></script>
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>
</div>

<div id="mainlogin">
<div id="or">or</div>
<h1>Inicio de sesion</h1>
<form method="post" action="checklogin.php">
<input name="myusername" id="myusername" type="text" placeholder="username" value="" required>
<input name="mypassword" id="mypassword" type="password" placeholder="password" value="" required>
<button type="submit"><i class="fa fa-arrow-right">Login</i></button>
<a href="register.php">¡Registrate!</a>
</form>
</div>
</div>
<td>
</div>
</td>

</body>