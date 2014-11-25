<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="PD3"; // Database name 
$tbl_name="usuarios"; // Table name 

// Connect to server and select databse.
//$con= mysqli_connect("$host", "$username", "$password", "$db_name");
include_once('connection.php');

$myusername=$_POST['usuario']; 
$mypassword=$_POST['password'];
$myrepass=$_POST['repassword'];
$myname=$_POST['Nombres'];
$mylastname=$_POST['Apellidos'];
$myemail=$_POST['Mail'];

$sql="SELECT * FROM $tbl_name WHERE usuario='$myusername'";
$result=mysqli_query($connection, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);



if($count==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('El usuario que ingreso ya existe')
    window.location.href='./register.php';
    </SCRIPT>");
	exit;
}else{

$sql="SELECT * FROM $tbl_name WHERE email='$myemail'";
$result=mysqli_query($connection , $sql);

$count2=mysqli_num_rows($result);

if($count2==1){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('El mail que ingreso ya existe')
    window.location.href='./register.php';
    </SCRIPT>");
	exit;

}else{

if($mypassword==$myrepass){
	$sql3="INSERT INTO `$db_name`.`$tbl_name` (`idusuario`, `nombres`, `apellidos`, `usuario`, `password`, `email`, `fbId`) VALUES ('', '$myname', '$mylastname', '$myusername', '$mypassword', '$myemail', '')";
	$insertar=mysqli_query($connection , $sql3);
	header("location:main_login.php");

}else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Las contraseñas no coinciden')
    window.location.href='./register.php';
    </SCRIPT>");
    exit;
}
}

}

?>