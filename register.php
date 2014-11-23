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
	
<div><label>Nombres:</label>

<input type="text" name="Nombres" required></div>
	

	
<div><label>Apellidos:</label>

<input type="text" name="Apellidos" required></div>
	

	
<div><label>Mail:</label>

<input type="text" name="Mail" required></div>
	

	
<div><label>Usuario:</label>

<input type="text" name="usuario" required></div>
	

	
<div><label>Password:</label>

<input type="password" name="password" required></div>
	

	
<div><label>Repetir Password:</label>

<input type="password" name="repassword" required></div>
	


<th><input type="submit" name="Register" value="Register" required></th>

</table>
</form>
