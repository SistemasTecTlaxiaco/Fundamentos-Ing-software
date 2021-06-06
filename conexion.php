<?php 

	$host = 'sql3.freesqldatabase.com';
	$user = 'sql3415993';
	$password = 'Ff5TlySaYJ';
	$db = 'sql3415993';

	$conection =@mysqli_connect($host,$user,$password,$db);

	if (!$conection) {
		echo "Error en la conexión";
	}

?>