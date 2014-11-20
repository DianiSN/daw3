<?php

				include_once('connection.php');
				$articuloId=$_GET['a'];
				
				$query = "SELECT `Articulo`.`nombre`, `Articulo`.`estadoArticulo`,`Articulo`.`descripcion`, `Articulo`.`calle`, `Estados`.`nombre` AS Estado, `Articulo`.`cuidad`, `Articulo`.`codigoPostal` 
				FROM Articulo, Estados WHERE `Articulo`.`state` = `Estados`.`estadoId` AND `Articulo`.`articuloId`=".$articuloId;


		        $result = mysqli_query($connection,$query);

		        

		        while($row = mysqli_fetch_array($result)) {
		        	echo "<h2>" . $row['nombre'] . "</h2>";
		          
		          echo "<h3> Estado del articulo:</h3><p>" . $row['estadoArticulo']."</p><br><br>";
		          echo "<h3>Descripción:</h3><p>".$row['descripcion']."</p><br><br>";
		          echo "<h3>Ubicación:</h3>" . $row['calle'] . ", ".$row['cuidad']. ",". $row['Estado']." C.P".$row['codigoPostal']."</td>";
		          
		          $direcc= $row['calle'].",".$row['cuidad'].",".$row['Estado'].",".$row['codigoPostal'].",Mexico";
		          // echo "<p>".$direcc."</p>";
		          echo "<br><br><br><iframe
	  						width=\"750\"
	  						height=\"500\"
							frameborder=\"0\" style=\"border:0\"
							src=\"https://www.google.com/maps/embed/v1/search?key=AIzaSyCgpoQUbukp62MU1dzkpglRN6bd1e_ZYW0&q=".$direcc."\">
						</iframe><br>";
					echo "<br><br><br><br><br><input type=\"button\" class=\"pure-button pure-button-active\" action=\"sendRequestArticulo(".$row['articuloId'].")\" value=\"Comprar\"><br><br><br><br><br>";
		          
		        }

		    



?>