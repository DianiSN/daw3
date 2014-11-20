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
    	<a href="displayArticulo.php" class="pure-menu-heading">CompraTodo</a>

    <ul>
        
        <li ><a href="viewAddArticulo.php">Agregar artículo</a></li>
        <li class="pure-menu-selected"><a href="displayArticulo.php">Mis artículos</a></li>
        <li ><a href="viewCompraArticulo.php">Artículos en venta</a></li>
    </ul>
	</div>

		<!-- <nav>

			<ul>
				<li><a href="">Dondé va el menu</a></li>
			</ul>

		</nav> -->
		<h2>Articulos </h2>

		<div id="response" align="center">
			
			<?php
				include_once('connection.php');
				$userId=10152885393286882;
				$userId=strtoupper($userId);
				$usario = mysqli_real_escape_string($connection, $userId);
		        $query=sprintf("SELECT `Articulo`.`nombre`, `Articulo`.`estadoArticulo`,`Articulo`.`descripcion`, `Articulo`.`calle`, `Estados`.`nombre` AS Estado, `Articulo`.`cuidad`, `Articulo`.`codigoPostal`,`Articulo`.`vendido`  
		                                FROM Articulo, Estados WHERE `Estados`.`estadoId` = `Articulo`.`state` AND `Articulo`.`usuarioId` = '%s' ORDER BY `Articulo`.`vendido` ASC",mysql_real_escape_string($userId));                        

		        $result = mysqli_query($connection,$query);

		        echo "<table class=\"pure-table pure-table-bordered\">
		        <thead>
		        <tr>
        		<th>Artículo</th>
        		<th>Estado</th>
        		<th>Descripción</th>
        		<th>Ubicación</th>
        		<th>Disponibilidad</th>
        		</tr>
        		</thead>";

		        while($row = mysqli_fetch_array($result)) {
		          echo "<tr>";
		          echo "<td>" . $row['nombre'] . "</td>";
		          echo "<td>" . $row['estadoArticulo'] . "</td>";
		          echo "<td>" . $row['descripcion'] . "</td>";
		          echo "<td>" . $row['calle'] . "<br>".$row['cuidad']. ",". $row['Estado']."<br>".$row['codigoPostal']."</td>";
		          if($row['vendido']==0){
		            echo "<td>Disponible</td>";

		          }else{
		            echo "<td>Vendido</td>";

		          }
		          echo "</tr>";
		        }

		        echo "</table>";
			?>
		
		</div>
	</body>
</html>