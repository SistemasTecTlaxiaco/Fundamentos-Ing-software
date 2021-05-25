
<?php
  session_start();

  require './modelo/Conexion1.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id_usuario,nombreCompleto, Email, contrasena_u FROM usuario WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>
<?php

require './modelo/Conexion1.php';

$message = '';

  if (!empty($_POST['nombre']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
    $sql = "INSERT INTO usuario(nombreCompleto, Email, contrasena_u) VALUES (:nombre,:user, :pass)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nombre', $_POST['nombre']);
    $stmt->bindParam(':user', $_POST['user']);
    $stmt->bindParam(':pass', $_POST['pass']);

    ///$password = password_hash($_POST['pass'],PASSWORD_BCRYPT);
    //$stmt->bindParam(':pass', $password);

    if ($stmt->execute()) {
      
      echo '<div class="alert alert-danger">se ha creado nuevo usuario</div>';
  
    } else {
      echo '<div class="alert alert-danger">error al registrar usuario</div>';
      
    }
  }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <script>
</script>
    </head>
        <body>
        <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

            <img class="wave1" src="./img/wave1.png" alt="">
            <div class="contenedor">
                <div class="img" >
                </div>
             <div class="contenido-login">
                <form action="" method="post">
                        <img src="./img/serv1.jpg" alt="">
                        <h1>PRESTADORES DE SERVICIO EGAL</h1>
                        <div class="input-div dn1">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            
                            <div class="div">
                                <h5>Nombre Completo</h5>
                                <input type="text" id="nombre" name="nombre" class="input">
                            </div>
                        
                        </div>
                      
                        <div class="input-div dn1">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            
                            <div class="div">
                                <h5>Email</h5>
                                <input type="text" id="usuario" name="user" class="input">
                            </div>
                        </div>
                        <div class="input-div pass" >
                            <div class="i">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Contraseña</h5>
                                <input type="password" id="pass" name="pass" class="input">
    
                            </div>
                        </div>
                        <input type="submit" onclick="validar()" name="registrar" class="btn" value="Registrar">
                        
                        <a href="./vista/login.php"> Iniciar sesion</a> 
                   </form>
                  
                </div>
                
            </div>
              
            
        </body>
      
     </head>
<script src="./js/login.js"></script>
</html>