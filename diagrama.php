<!DOCTYPE html>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="fb.js"></script>
		<title>Diagrama</title>	
	</head>
	
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
        <li><a href="diagrama.php">Diagrama</a></li>
        <li class="pure-menu-selected" onClick="fbLogout()"> <a href="logout.php">LogOut </a></li>
    </ul>
	</div>

	<h1 align= "middle"> DIAGRAMA DE CASOS DE USO</h1>
	
	<img  align="middle" src="imagenes/diagrama.png" border="0" alt="Diagrama" /></a>

	</body>
</html>