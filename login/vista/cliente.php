
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
					<li><a href="../paginas/contacto.php" target="iframea">CONTACTOS</a></li>
				</ul>
			</nav>
			
			<form id="searchform">
				<input type="search" id="s" placeholder="Search">
			</form>
		</header>
		<div id="content">
			<iframe height="100%" width="100%" src="../paginas/ofertas.php" name="iframea"></iframe>
		</div>
		<footer id="footer">
			<p>Autor: PRESTADORES DE SERVICIO EGAL:)</p>
		</footer>
	</div>
</body>
<style type="text/css">
	html,body,div,iframe {margin:0; padding:0; height:100%}
	iframe {display:block; width:100% border:none;}
</style>
</html>