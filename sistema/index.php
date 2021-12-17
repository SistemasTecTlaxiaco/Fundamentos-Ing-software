<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "includes/scripts.php"

  ?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	
	<title>Prestadores de Servicio EGAL</title>
	<link rel="stylesheet" href="styles.css">
  
</head>

<body>
  <?php include "includes/header.php"?>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="mb-3">
    <form action="buscar_usuario.php" method="get" class="form_search" >
      <input type="text" name="busqueda" id="busqueda" placeholder="Buscar">
      <input   type="submit" value="Buscar" class="btn_search">
    </form>
  </div>
  
	<div class="container">
      <?php 
        require_once "../conexion.php";
        $query = mysqli_query($conection,'SELECT * FROM registro');
        foreach ($query as $conection){
      ?>
      
      <div class="item">
      <a href="detalle_persona.php?codigo=<?php echo $conection['id_registro'] ?>"> <img src="../img/<?php echo $conection['foto'];?>" class="item-img" style="width:300px; height:300px;" >
        <h3><?php echo  $conection['nombreCompleto'];?></h3>
        <p><?php echo  $conection['tipo_servicio'];?></p>
		    <a href='detalle_persona.php?codigo=<?php echo $conection['id_registro'] ?>'  class="btn btn-primary" ><center style="background-color: #FF9900">Mas informacion </center> </a>
        <div class="item-text">
        </div>
      </div>
    <?php
      }
      ?>
  </div>
   
	<?php include "includes/footer.php" ?>
  <style>
    .form_search
    {
      display: -webkit-flex;
      display: -moz-flex;
      display: -ms-flexbox;
      display: -o-flex;
      display: flex;
      float: left;
      background:initial ;
      padding: 10px;
      border-radius: 10px;
    }
    .form_search .btn_search
    {
      background: #0a4661;
      color: #fff;
      padding: 0 20px;
      border:0;
      cursor:pointer;
      margin-left: 20px;
    }
  </style>
</body>
</html>

