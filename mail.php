<?php
session_start();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div class="logo-image" align="middle" >
		<img  align="middle" src="imagenes/logo2.png" width="150" height="230" border="0" alt="CompraTodo" /></a>

</div>
<link rel="stylesheet" type="text/css" href="style2.css"/>
<form action="checkmail.php" method="post" name="form3">
	<h1>Aún no contamos con tu EMail</h1>
	<p align = "middle"><label>Ingresa un eMail con el cual podamos contactarnos contigo</label></p>
	<br>
	<input type="text" name="eMail" required>
	<input type="submit" name="Registrar eMail!" value="Registrar eMail">
<form>