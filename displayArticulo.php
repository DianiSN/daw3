<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="ajax.js"></script>
		<title>Nuevo artículo</title>	
	</head>
	<header></header>
	<body>

		<nav>

			<ul>
				<li><a href="">Dondé va el menu</a></li>
			</ul>

		</nav>
		<h2>Articulos </h2>
		<div id="response" align="center">
			<?php

				// include_once('connection.php');
				// $result = mysqli_query($connection,"SELECT Articulo.nombre,estadoArticulo,descripcion,calle FROM Articulo");
			 //    echo "<table>";
			 //    while($row = mysqli_fetch_array($result)) {
			 //      echo "<tr>";
			 //      echo "<td>" . $row['nombre'] . "</td>";
			 //      echo "<td>" . $row['estadoArticulo'] . "</td>";
			 //      echo "<td>" . $row['descripcion'] . "</td>";
			 //      echo "<td>" . $row['calle'].", ".$row['cuidad'].", ".$row['state'].", ".$row['codigoPostal']."</td>";
			 //      if($row['vendido'] == 0){
			 //        echo "<td>Disponible</td>";

			 //      }else{
			 //         echo "<td>Vendido</td>";
			 //      }
			      
			 //      echo "</tr>";
			 //    }

			 //    echo "</table>"; 
			$url = "http://localhost/DAW/PD3/slim/display/articulos/"+$userId; //Route to the REST web service
			$c = curl_init($url);
			$response = curl_exec($c);
			curl_close($c);
				//no funciona
			?>
		
		</div>
	</body>
</html>