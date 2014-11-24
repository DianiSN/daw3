<?php
session_start();

//if(isset($_SESSION["myusername"])){
//echo "you are already logged";
//echo " " . $_SESSION["myusername"] . ".<br>";
//} else {
	//header("location:main_login.php");
//}
?>


<link rel="stylesheet" type="text/css" href="style2.css"/>
<form action="check_register.php" method="post" name="form3">
<table width="400">
	
<div><h1><label>Nombres:</label></h1>

<input type="text" name="Nombres" required></div>
	

	
<div><h1><label>Apellidos:</label></h1>

<input type="text" name="Apellidos" required></div>
	

	
<div><h1><label>Mail:</label></h1>

<input type="text" name="Mail" required></div>
	

	
<div><h1><label>Usuario:</label></h1>

<input type="text" name="usuario" required></div>
	

	
<div><h1><label>Password:</label></h1>

<input type="password" name="password" required></div>
	

	
<div><h1><label>Repetir Password:</label></h1>

<input type="password" name="repassword" required></div>
	


<th><input type="submit" name="Register" value="Registrar" required></th>

</table>
</form>
