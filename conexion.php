<?php 

	$host = 'db4free.net';
	$user = 'useregal123';
	$password = 'prestadoresEGAL_2021';
	$db = 'dbprestadores123';

	$conection =@mysqli_connect($host,$user,$password,$db);

	if (!$conection) {
		echo "Error en la conexión";
	}

?>