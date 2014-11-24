<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="ajax.js"></script>
		<script type="text/javascript" src="fb.js"></script>
		<title>Modificar Artículo</title>	
	</head>
	<header></header>
	<body>
	<!-- <div class="pure-menu pure-menu-open pure-menu-horizontal">
    	<a href="displayArticulo.php" class="pure-menu-heading">CompraTodo</a>

    <ul>
        
        <li class="pure-menu-selected"><a href="viewAddArticulo.php">Agregar artículo</a></li>
        <li><a href="displayArticulo.php">Mis artículos</a></li>
        <li><a href="viewCompraArticulo.php">Artículos en venta</a></li>
    </ul>
	</div> -->

		<!-- <nav>

			<ul>
				<li><a href="">Dondé va el menu</a></li>
			</ul>

		</nav> -->
		<?php
			
			$artId=$_GET['a'];

			include_once('connection.php');
			$query ="SELECT `Articulo`.`nombre` FROM Articulo WHERE `Articulo`.`articuloId` = $artId";

			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_array($result)) {

		
		echo "<h2>Modificar Artículo: ".$row['nombre']."</h2>";
		
		
		echo "<div id=\"response\" align=\"center\">
		<form class=\"pure-form\" action=\"updateArticulo.php\" method=\"post\" id=\"Modificar\">";
			
			
				echo "Artículo: <input type=\"text\" name=\"articulo\" placeholder=\"".$row['nombre']."\" required><br><br>";

			
			}


			?>
		
		
		Estado del artículo: 
		<select name="estArticulo" required>
			<option value="nuevo">Nuevo</option>
			<option value="semi-nuevo">Semi-nuevo</option>
			<option value="usado">Usado</option>
			<option value="gastado">Gastado</option>
			<option value="maltratado">Maltratado</option>

		</select><br><br>
		<?php


			//$artId=$_GET['a'];
			//include_once('connection.php');
			$query ="SELECT `Articulo`.`precio`,`Articulo`.`descripcion`,`Articulo`.`calle`,`Articulo`.`state` FROM Articulo WHERE `Articulo`.`articuloId` = $artId";

			$result = mysqli_query($connection,$query);



			while($row = mysqli_fetch_array($result)) {
				$stateId=$row['state'];
				echo "<input type=\"hidden\" name=\"artId\" id=\"artId\" value=\"".$artId."\">";

				echo "Precio:  $ <input type=\"text\" name=\"precio\" placeholder=\"".$row['precio']."\" required>MXN<br><br>
				Descripción:<textarea name=\"descripcion\" rows=\"4\" cols=\"50\" placeholder=\"".$row['descripcion']."\" required></textarea><br><br>
				Calle: <input type=\"text\" name=\"calle\" placeholder=\"".$row['calle']."\" required><br><br>";

			
			}


			?>
		
		Estado: <!-- <input type="text" name="carrera" placeholder="ISC" required><br> -->
		

		<?php
			
			include_once('connection.php');
			$result = mysqli_query($connection,"SELECT estadoId, nombre
									FROM Estados ORDER BY nombre");

			echo "<select name=\"estados\" required>";
		
				echo '<option>Selecciona...</option>';
			while($row = mysqli_fetch_array($result)) {

				

					echo '<option value="'.$row['estadoId'].'">'.$row['nombre'].'</option>';
				
			  	
			}

			echo "</select>";


		?>
		<br><br>

		<?php


			//$artId=$_GET['a'];
			//include_once('connection.php');
			$query ="SELECT `Articulo`.`cuidad`,`Articulo`.`codigoPostal` FROM Articulo WHERE `Articulo`.`articuloId` = $artId";

			$result = mysqli_query($connection,$query);

			while($row = mysqli_fetch_array($result)) {

				echo "Cuidad: <input type=\"text\" name=\"cuidad\" placeholder=\"".$row['cuidad']."\" required><br><br>
		Código Postal: <input type=\"text\" name=\"codigoPostal\" placeholder=\"".$row['codigoPostal']."\" required><br><br>";

			
			}


			?>
			

		
		



<br>
<br>
		

		<input type="submit" class="pure-button pure-button-active" value="Modificar">
		
		<input type="reset" class="pure-button pure-button-active" value="Limpiar" id="reset">
		</form>
		
	</div>
	</body>
</html>