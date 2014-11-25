<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="fb.js"></script>
		<title>Nuevo artículo</title>	
	</head>
	<header></header>
	<body>
	<div class="pure-menu pure-menu-open pure-menu-horizontal">
		<div class="logo-image">
		<a href="viewCompraArticulo.php"><img  align="left"src="imagenes/logo.png" width="20" height="30" border="0" alt="CompraTodo" /></a>
		</div>
    	<a href="viewCompraArticulo.php" class="pure-menu-heading">CompraTodo</a>

    <ul>
        
        <li class="pure-menu-selected"><a href="viewAddArticulo.php">Agregar artículo</a></li>
        <li><a href="displayArticulo.php">Mis artículos</a></li>
        <li><a href="viewCompraArticulo.php">Artículos en venta</a></li>
        <li class="pure-menu-selected" onClick="fbLogout()"> <a href="logout.php">LogOut </a></li>
    </ul>
	</div>

		<!-- <nav>

			<ul>
				<li><a href="">Dondé va el menu</a></li>
			</ul>

		</nav> -->
		<h2>Nuevo artículo</h2>
		
		<div id="response" align="center">
		<form class="pure-form" action="insertArticulo.php" method="post" id="registrar" enctype="multipart/form-data">

		
		Artículo: <input type="text" name="articulo" placeholder="plancha Mabe" onchange="fbId()" required><br><br>
		Estado del artículo: 
		<select name="estArticulo" required>
			<option value="nuevo">Nuevo</option>
			<option value="semi-nuevo">Semi-nuevo</option>
			<option value="usado">Usado</option>
			<option value="gastado">Gastado</option>
			<option value="maltratado">Maltratado</option>

		</select><br><br>
		Precio:  $ <input type="text" name="precio" placeholder="50" required>MXN<br><br>
		Descripción:<textarea name="descripcion" rows="4" cols="50" required></textarea><br><br>

		<label>Imagen: </label>
		<input type="file" name="flsImagen" required> 
		<br>
		<br>

		Calle: <input type="text" name="calle" placeholder="Ave. Mariano" required><br><br>
		Estado: <!-- <input type="text" name="carrera" placeholder="ISC" required><br> -->
		

		<?php
			
			include_once('connection.php');
			$result = mysqli_query($connection,"SELECT estadoId, nombre
									FROM Estados ORDER BY nombre");

			echo "<select name=\"estados\"  onchange=\"fbId()\"required>";
		
				echo '<option>Selecciona...</option>';
			while($row = mysqli_fetch_array($result)) {

				echo '<option value="'.$row['estadoId'].'">'.$row['nombre'].'</option>';
				
			  
			}

			echo "</select>";


		?>
		<br><br>
		Cuidad: <input type="text" name="cuidad" placeholder="Guadalajara" required><br><br>
		Código Postal: <input type="text" name="codigoPostal" placeholder="76130" required><br><br>
		<input type="hidden" name="user" id="user">



<br>
<br>
		

		<input name= "registro" type="submit" class="pure-button pure-button-active" value="Registrar">
		
		<input type="reset" class="pure-button pure-button-active" value="Limpiar" id="reset">
		</form>
		
	</div>
	</body>
</html>