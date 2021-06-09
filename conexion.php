<?php 

	$host = 'prestadoresdeservicio.c0nt5wef8jyz.us-east-2.rds.amazonaws.com';
	$user = 'admin';
	$password = 'prestadores_2021';
	$db = 'proyectoEgal';

	$conection =@mysqli_connect($host,$user,$password,$db);

	if (!$conection) {
		echo "Error en la conexión";
	}

?>