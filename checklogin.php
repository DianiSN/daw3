<?php
session_start();

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="registro"; // Database name 
$tbl_name="usuarios"; // Table name 

// Connect to server and select databse.
$con= mysqli_connect("$host", "$username", "$password", "$db_name");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$m7ypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE usuario='$myusername' and password='$mypassword'";
$result=mysqli_query($con , $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){


// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION["myusername"]=$myusername;

$_SESSION["mypassword"]=$mypassword;

header("location:displayArticulo.php");
}
else {
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Los datos de inicio de sesión son erroneos')
    window.location.href='./main_login.php';
    </SCRIPT>");
}
?>