<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="PD3"; // Database name 
$tbl_name="usuarios"; // Table name 

// Connect to server and select databse.
// $con= mysqli_connect("$host", "$username", "$password", "$db_name");


include_once('connection.php');

$fbide=$_SESSION["fbid"];
$myemail=$_POST['eMail']; 
//echo "USER:".$fbide;
$sql="UPDATE `$db_name`.`$tbl_name` SET `email` = '$myemail' WHERE `usuarios`.`fbId` = $fbide";
//$insertar=mysqli_query($connection , $sql);
if (!mysqli_query($connection,$sql)) {
    die('Error: ' . mysqli_error($connection));
}else{
	$_SESSION["mail"]=$myemail;
	//echo "mail:".$_SESSION["mail"];
	include("displayArticulo.php");
}