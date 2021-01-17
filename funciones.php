<?php
	//	Define variables for connection
	define("cServidor", "localhost");
	define("cUsuario", "ferjml97");
	define("cPass","97_ferjml*3960");
	define("cBd","juegos");

	//	Connection to database
	$conexion = mysqli_connect(cServidor, cUsuario, cPass, cBd);
	//	Query to database
	$consulta = "SELECT id_juego, nombre, anio, empresa FROM t_juegos";
	$registro = mysqli_query($conexion, $consulta);

	//	Ordering the query to the database
	$i=0;
	$tabla = "";
	while($row = mysqli_fetch_array($registro)){
		$tabla.='{
			"id_juego":"'.$row['id_juego'].'",
			"nombre":"'.$row['nombre'].'",
			"anio":"'.$row['anio'].'",
			"empresa":"'.$row['empresa'].'"},';		
		$i++;
	}
	$tabla = substr($tabla,0, strlen($tabla) - 1);
	echo '{"data":['.$tabla.']}';	
?>