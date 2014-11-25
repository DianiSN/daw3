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


if (isset($_GET["w1"]) && isset($_GET["w2"])) {

	$fbide= $_GET["w2"];
	$sql="SELECT * FROM $tbl_name WHERE fbId='$fbide'";
	$mailsql="SELECT * FROM $tbl_name WHERE fbId='$fbide'";
	$result=mysqli_query($connection , $sql);
	$mailresult=mysqli_query($connection , $mailsql);
	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	$row = mysqli_fetch_array($mailresult); 

	if($count==1){
		if($row["email"]!=''){

			$_SESSION["fbid"]=$fbide;
			header("location:displayArticulo.php");

		} else {
			$_SESSION["fbid"]=$fbide;
			header ("location:mail.php");
		}	
	} else {
		$fbname=$_GET["w1"];
		$sql3="INSERT INTO `$db_name`.`$tbl_name` (`idusuario`, `nombres`, `apellidos`, `usuario`, `password`, `email`, `fbId`) VALUES ('', '$fbname', '', '', '', '', '$fbide')";
		$insertar=mysqli_query($connection, $sql3);
		$_SESSION["fbid"]=$fbide;
		header("location:displayArticulo.php");
	}
	
}

?>