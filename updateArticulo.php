<?php

////no funcionaaaa!!!!! NO FUNCIONA!
include_once('connection.php');
$idArt=$GET_['a'];
//escape variables for security

$artId=mysqli_real_escape_string($connection, $_POST['artId']);
$user=mysqli_real_escape_string($connection, $_POST['user']);
$articulo = mysqli_real_escape_string($connection, $_POST['articulo']);
$estArticulo = mysqli_real_escape_string($connection, $_POST['estArticulo']);
$precio= mysqli_real_escape_string($connection, $_POST['precio']);
$descripcion = mysqli_real_escape_string($connection, $_POST['descripcion']);
$calle = mysqli_real_escape_string($connection, $_POST['calle']);
$estado=mysqli_real_escape_string($connection, $_POST['estados']);
$cuidad=mysqli_real_escape_string($connection, $_POST['cuidad']);
$cp=mysqli_real_escape_string($connection, $_POST['codigoPostal']);

if (preg_match("/^[.áéíóúa-zA-Z0-9 ]*$/",$calle) && preg_match("/^[áéíóúa-zA-Z ]*$/",$cuidad)&& preg_match("/^[0-9]*$/",$precio) && preg_match("/^[0-9]*$/",$cp)) {


	$sql="UPDATE Articulo SET nombre='$articulo', estadoArticulo='$estArticulo', precio='$precio', descripcion='$descripcion', calle='$calle', state='$estado', cuidad='$cuidad', codigoPostal='$cp' WHERE articuloId='$artId'";
  //echo $sql;


  if (!mysqli_query($connection,$sql)) {
    die('Error: ' . mysqli_error($connection));
  }else{
    //echo $userId;
    //echo "Sucess!";
    include('displayArticulo.php');
  }
        

}else{

  echo "Por favor llenar la forma correctamente.\n Regrese a la página anterior para hacer correcciones.";
      
}
?>


