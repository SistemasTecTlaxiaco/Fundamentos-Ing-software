
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/CSS.CSS">
        <title>EGAL</title>
</head>
<body>
	<a href='../controlador/inicio_login.php'>Cerrar session</a>
		<div id="pagewrap">
		<header id="header">
			<hgroup>
			    <img style="float:right;"src="../img/logot.png" align="right" width="17%" height="17%"></img>
				<h1 id="site-logo"><a href="#">"BIENVENIDOS A PRESTADORES DE SERVICIOS EGAL"</a></h1>
			</hgroup>
			<nav>
				<ul id="main-nav" class="clearfix">
					<li><a href="../paginas/ofertas.php" target="iframea">PRINCIPAL</a></li>
					<li><a href="../paginas/nosotros.php" target="iframea">NOSOTROS</a></li>
					<li><a href="../paginas/mensajes.php" target="iframea">MENSAJES</a></li>
					<li><a href="../paginas/notificaciones.php" target="iframea">NOTIFICACIONES</a></li>
					<li><a href="" target="iframea">CONTACTOS</a></li>
				</ul>
			</nav>
			
			<form id="searchform">
				<input type="search" id="s" placeholder="Search">
			</form>
		</header>
		<div id="content">
			<iframe height="100%" width="100%" src="../paginas/ofertas.php" name="iframea"></iframe>
		</div>
		<!--<section id="imagenes">
		<div id="content">
		<h1>OFERTAS DE TRABAJO</h1>
		<section id="imagenes">
			<div class="imagen">
				<h4>Albañil</h4>
				<li>Direccion: Ocotlán de Morelos, Oax</li>
				<li>Precio: $8,000 - $10,0000 mensuales</li>
				<img class="imgn" src="../img/albañil.jpg">
			</div>
			<div class="imagen">
				<h4>Carpintero</h4>
				<li>Dirección: Oaxaca de Juarez, Oax</li>
				<li>Precio: $10,000 - $12,0000 mensuales</li>
				<img class="imgn" src="../img/carpinteria.jpg">
			</div>
			<div class="imagen">
				<h4>Plomero</h4>
				<li>Direccion: 5 de mayo Oaxaca de Juarez</li>
				<li>Precio: $7,000 - $8,0000 mensuales</li>
				<img class="imgn" src="../img/plomero.jpg">
			</div>
			<div class="imagen">
				<h4>Auxiliar de limpieza y mantenimiento</h4>
				<li>Direccion: Heroica,Cd. de Tlaxiaco, Oax</li>
				<li>Precio: $5,000 - $5,500 mensuales</li>
				<img class="imgn" src="../img/limpieza.jpg">
			</div>
			<div class="imagen">
				<h4>Cocinera</h4>
				<li>Direccion: 5 de mayo Oaxaca de Juarez</li>
				<li>Precio: $7,000 - $8,0000 mensuales</li>
				<img class="imgn" src="../img/cocinera.jpg">
			</div>
			<div class="imagen">
				<h4>Pintor</h4>
				<li>Direccion: Teposcolula, Oax</li>
				<li>Precio: $6,000 - $6,500 mensuales</li>
				<img class="imgn" src="../img/pintor.jpg">
			</div>
		</section>-->
		<footer id="footer">
			<p>Autor: PRESTADORES DE SERVICIO EGAL:)</p>
		</footer>
	</div>
</html>
</body>
<style type="text/css">
	html,body,div,iframe {margin:0; padding:0; height:100%}
	iframe {display:block; width:100% border:none;}
</style>
<?php

