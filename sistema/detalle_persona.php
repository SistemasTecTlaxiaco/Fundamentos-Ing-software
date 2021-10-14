<?php
if (!isset($_GET["codigo"])) {
  exit();
}
$codigo = $_GET["codigo"];
require_once "../conexion.php";
$query = mysqli_query($conection,'SELECT * FROM registro where id_registro=?');
?>
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
<?php include "includes/header.php" ?>
<br>
<br>
<br>
<br>
<br>
<div class="container">
<?php 
      require_once "../conexion.php"; 
      $query = mysqli_query($conection,"SELECT * FROM registro where id_registro='$codigo' ");
      foreach ($query as $conection){  

      }
      ?>
     
     
      <div class="col-md-6">
  <img src="../img/<?php echo $conection['foto']; ?>" class="item-fluid">
</div>

<div class="col-md-6">
<h1><?php echo  $conection['tipo_servicio']; ?></h1>
  <h2> <?php echo $conection['nombreCompleto']; ?> </h2>
  <h3>Dirección: <?php echo  $conection['direccion']; ?></h3>
  <h3>Gmail: <?php echo  $conection['email']; ?></h3>

 <h3 >Contacto: <span class="icocor1">&#128222;</span><?php echo  $conection['telefono']; ?></h3>
  <h3>Pago: <?php echo  $conection['pago']; ?></h3>
  <p> <center><?php echo $conection['descripcion']; ?></center></p>
 
     </div>
     
      </div>
      
	<?php include "includes/footerventanas.php" ?>
</body>
</html> 
