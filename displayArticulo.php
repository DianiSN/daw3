<?php
session_start();
?>
<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="fb.js"></script>
		<script type="text/javascript" src="ajax.js"></script>
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
        
        <li ><a href="viewAddArticulo.php">Agregar artículo</a></li>
        <li class="pure-menu-selected"><a href="displayArticulo.php">Mis artículos</a></li>
        <li ><a href="viewCompraArticulo.php">Artículos en venta</a></li>
        <li><a href="diagrama.php">Diagrama</a></li>
        <li onClick="fbLogout()"> <a href="logout.php">LogOut </a></li>
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
				//$userId="10152885393286882";
				$userId=$_SESSION["fbid"];				
				//$userId=strtoupper($user);

				$usuario = mysqli_real_escape_string($connection, $userId);
		        $query="SELECT `Articulo`.`articuloId`,`Articulo`.`nombre`, `Articulo`.`estadoArticulo`,`Articulo`.`precio`,`Articulo`.`descripcion`, `Articulo`.`calle`, `Estados`.`nombre` AS Estado, `Articulo`.`cuidad`, `Articulo`.`codigoPostal`,`Articulo`.`vendido`, `imagenes`.`ruta` AS Foto  
		                FROM Articulo, Estados, imagenes 
		                WHERE `Estados`.`estadoId` = `Articulo`.`state` AND `Articulo`.`usuarioId` = $usuario AND `Articulo`.`articuloId` = `imagenes`.`articuloId`";
		        
		        // var_dump($usuario);                        
		         //echo $query;
		        $result = mysqli_query($connection,$query);
		        

		        echo "<table class=\"pure-table pure-table-bordered\">
		        <thead>
		        <tr>
        		<th>Artículo</th>
        		
        		<th>Estado</th>
        		<th>Precio</th>
        		<th>Descripción</th>
        		<th>Foto</th>
        		<th>Ubicación</th>
        		<th>Disponibilidad</th>
        		</tr>
        		</thead>";


		        while($row = mysqli_fetch_array($result)) {
		        	$ruta = $row['Foto'];
		          echo "<tr>";
		          echo "<td>" . $row['nombre'] . "</td>";
		          echo "<td>" . $row['estadoArticulo'] . "</td>";
		          echo "<td>  $ " . $row['precio'] . "</td>";
		          echo "<td>" . $row['descripcion'] . "</td>";
		          echo "<td><img width='50' height='50' src='$ruta'></td>";
		          echo "<td>" . $row['calle'] . "<br>".$row['cuidad']. ",". $row['Estado']."<br>".$row['codigoPostal']."</td>";
		          if($row['vendido']==0){
		            echo "<td>Disponible<br>";
		            echo "<input type=\"button\" class=\"pure-button pure-button-active\" onclick=\"sendVenderArticulo(".$row['articuloId'].",".$usuario.")\" value=\"Vendido\"><br>";
		            echo "<input type=\"button\" class=\"pure-button pure-button-active\" onclick=\"sendDeleteArticulo(".$row['articuloId'].")\" value=\"Borrar\"></td>";
		            
		            
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