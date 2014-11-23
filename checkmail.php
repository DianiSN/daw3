<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="registro"; // Database name 
$tbl_name="usuarios"; // Table name 

// Connect to server and select databse.
$con= mysqli_connect("$host", "$username", "$password", "$db_name");

$fbide=$_SESSION["fbid"];
$myemail=$_POST['eMail']; 

$sql="UPDATE `$db_name`.`$tbl_name` SET `email` = '$myemail' WHERE `usuarios`.`fbId` = $fbide";
$insertar=mysqli_query($con , $sql);

header("location:displayArticulo.php");