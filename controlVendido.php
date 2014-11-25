<?php

				include_once('connection.php');
				$articuloId=$_GET['a'];
				$usuario=$_GET['s'];
				$query ="UPDATE Articulo SET vendido=1 WHERE articuloId=$articuloId";
				
				if (!mysqli_query($connection,$query)) {
    				die('Error: ' . mysqli_error($connection));
  				}else{
  					//include('displayArticulo.php');
  					 $query="SELECT `Articulo`.`articuloId`,`Articulo`.`nombre`, `Articulo`.`estadoArticulo`,`Articulo`.`precio`,`Articulo`.`descripcion`, `Articulo`.`calle`, `Estados`.`nombre` AS Estado, `Articulo`.`cuidad`, `Articulo`.`codigoPostal`,`Articulo`.`vendido`  
		                FROM Articulo, Estados 
		                WHERE `Estados`.`estadoId` = `Articulo`.`state` AND `Articulo`.`usuarioId` = $usuario";
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
        		<th>Ubicación</th>
        		<th>Disponibilidad</th>
        		</tr>
        		</thead>";

		        while($row = mysqli_fetch_array($result)) {
		          echo "<tr>";
		          echo "<td>" . $row['nombre'] . "</td>";
		           //echo "<td>" . $row['articuloId'] . "</td>";
		          echo "<td>" . $row['estadoArticulo'] . "</td>";
		          echo "<td>  $ " . $row['precio'] . "</td>";
		          echo "<td>" . $row['descripcion'] . "</td>";
		          echo "<td>" . $row['calle'] . "<br>".$row['cuidad']. ",". $row['Estado']."<br>".$row['codigoPostal']."</td>";
		          if($row['vendido']==0){
		            echo "<td>Disponible<br>";
		            
		            //echo "     <input type=\"button\" class=\"pure-button pure-button-active\" onclick=\"sendRequestArticulo(".$row['articuloId'].")\" value=\"Borrar\"></td>";
		            
		            
		          }else{
		            echo "<td>Vendido</td>";

		          }
		          echo "</tr>";
		        }

		        echo "</table>";
  				}

		        

		        

		       

		    



?>