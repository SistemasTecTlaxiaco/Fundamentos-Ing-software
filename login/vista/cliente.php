<?php
	session_start();
	if($_SESSION['tipo_usuario']==1
	){
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" >
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/CSS.CSS">
        <title>Presatador</title>
</head>
<body>
	<a href='../controlador/inicio_login.php'>Cerrar session</a>
		<div id="pagewrap">
		<header id="header">
			<hgroup>
				<div class="header-logo"><a href="#"><img src="../img/serv1.jpg" aling="right" width="10%" height="10%"></img></a></h1>
				<h1 id="site-logo"><a href="#">BIENVENIDO A PRESTADORES DE SERVICIO</a></h1>
			</hgroup>
			<nav>
				<ul id="main-nav" class="clearfix">
					<li><a href=' ' target="iframea">PRINCIPAL</a></li>
					<li><a href="../paginas/nosotros.html" target="iframea">NOSOTROS</a></li>
					<li><a href="../paginas/nosotros.html" target="iframea">SERVICIOS</a></li>
				</ul>
			</nav>
			<form id="searchform">
				<input type="search" id="s" placeholder="Search">
			</form>
		</header>
		<div id="content">
		<h2>Contenido</h2>
		<<img src="../img/loginprestadores.jpg" alt="" >
	</div>
</html>
</body>
<?php
}
else{
    header('Location: ../vista/login.php');
}
?>