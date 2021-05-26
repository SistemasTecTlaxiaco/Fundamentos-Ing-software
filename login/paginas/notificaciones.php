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
        <h1 class="post-title" >NOTIFICACIONES</h1>
        <img src="../img/not.jpg"/>		
        <section id="video">
			<article class="art">
				<br>
					No hay ninguna notificación
				<br>				
			</article>
		</section>
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