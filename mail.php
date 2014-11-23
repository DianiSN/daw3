<?php
session_start();

?>

<link rel="stylesheet" type="text/css" href="style2.css"/>
<form action="checkmail.php" method="post" name="form3">
	<h1>Aun no contamos con tu EMail</h1>
	<label>Ingresa un eMail con el cual podamos contactarnos contigo</label>
	<input type="text" name="eMail" required>
	<input type="submit" name="Registrar eMail!" value="Registrar eMail">
<form>