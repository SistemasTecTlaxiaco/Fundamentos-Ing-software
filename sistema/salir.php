<html>
<head>
<title>Menu desplegable</title>
<style type="text/css">
{
 *  padding:0px;
    margin:0px;

}
#header{
    margin:auto;
    width: 500px;
    font-family:Arial,Helvetica,sans-serif;
}
ul, ol{
    list-style:none;
}
.nav li a{
    background-color:#000;
    color:#fff;
    text-decoration:none;
    padding:10px 15px;
    display:block;

}
.nav li a:hover{
    background-color:#434343;
}

.nav>li{
    float:left;
}
.nav li ul{
    display:none;
    position:absolute;
    min-width:140px;
}
.nav li:hover >ul {
    display:block;
}
.nav li ul li{
    position:relative;
}
.nav ul li ul{
    right:-140px;
    top:0px;
}
</style>
</head>
<body>
<div id="header">
<ul class "menu">

     <li><a href="">Modificar datos</a></li>
     <ul>
     <li><a href="">Nombre </a></li>
     <li><a href="">Apellido</a></li>
     <li><a href="">Contraseña</a></li>
     <li><a href="">correo</a></li>
    </ul>
     </li>

    <li><a href="">Servicios</a></li>
     <ul>
    <li><a href="">Plomeria </a></li>
    <li><a href="">Cocinera</a></li>
    <li><a href="">Niñera</a></li>
    <li><a href="">Ingeniero de obras </a></li>
     </ul>
    </li>
    <li><a href="">Cerrar sesion</a></li>	
     <?php 
	session_start();
	session_destroy();
	header('location: ../');
    ?>
	</ul>
 </nav>


<?php 
	session_start();
	session_destroy();

	header('location: ../');


?>