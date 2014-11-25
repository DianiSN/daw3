<?php
session_start();
include_once('connection.php');

//escape variables for security
//$user=mysqli_real_escape_string($connection, $_POST['user']);
$userId=$_SESSION["fbid"];	
$articulo = mysqli_real_escape_string($connection, $_POST['articulo']);
$estArticulo = mysqli_real_escape_string($connection, $_POST['estArticulo']);
$precio= mysqli_real_escape_string($connection, $_POST['precio']);
$descripcion = mysqli_real_escape_string($connection, $_POST['descripcion']);
$calle = mysqli_real_escape_string($connection, $_POST['calle']);
$estado=mysqli_real_escape_string($connection, $_POST['estados']);
$cuidad=mysqli_real_escape_string($connection, $_POST['cuidad']);
$cp=mysqli_real_escape_string($connection, $_POST['codigoPostal']);

if (preg_match("/^[.áéíóúa-zA-Z0-9 ]*$/",$calle) && preg_match("/^[áéíóúa-zA-Z ]*$/",$cuidad)&& preg_match("/^[0-9]*$/",$precio) && preg_match("/^[0-9]*$/",$cp)) {
  $sql="INSERT INTO Articulo (usuarioId, nombre, estadoArticulo, precio, descripcion, calle, state, cuidad, codigoPostal,vendido)
  VALUES ('$userId','$articulo', '$estArticulo','$precio', '$descripcion','$calle', '$estado', '$cuidad', '$cp','0')";

  if (!mysqli_query($connection,$sql)) 
    die('Error: ' . mysqli_error($connection));
        

}else{

  echo "Por favor llenar la forma correctamente.\n Regrese a la página anterior para hacer correcciones.";
      
}

				
		
$query="SELECT `articuloId`
        FROM Articulo 
        WHERE `usuarioId` = $userId AND `nombre` = '$articulo' AND `precio` = $precio";

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_array($result)) {
  $idArt = $row['articuloId'];
}

$archivo = $_FILES['flsImagen']['tmp_name'];
$destino = "imagenes/". $_FILES['flsImagen']['name'];
move_uploaded_file($archivo, $destino);
mysql_connect("localhost", "root", "");
mysql_select_db("pd3");
mysql_query("Insert INTO imagenes Values($idArt,'$destino')");

include('displayArticulo.php');
?>
