<?php
	session_start();
	if($_SESSION['tipo_usuario']==1
	){
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" >
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/CSS.CSS">
        <title>EGAL</title>
</head>

<body class="a">
	<div id="content">

      
        <img src="../img/mision.jpg"/>
			<h4>
				Garantizar la calidad en la prestación de servicios subcontrados a todos nuestros clientes
				mediante el desarrollo relaciones de transparentes y duraderas. A través de la excelencia en el servicio, 
				gane el mercado y ofrezca nuevas oportunidades de trabajos.
			</h4>	
		
        <img src="../img/vision.jpg"/>
			<h4>
				Generar nuevas oportunidades económicas para los miembros del mercado natural.
			</h4>	
		
    </div>
<a href="../vista/cliente.php" target="iframea">VOLVER A LA PAGINA PRINCIPAL</a>	
</body>
	
</html>
<?php
}
else{
    header('Location: ../vista/login.php');
}
?>