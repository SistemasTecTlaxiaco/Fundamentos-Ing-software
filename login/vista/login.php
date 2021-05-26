
<?php 
session_start();

    if(isset($_SESSION['usuario'])){
        header('Location: cliente.php');
    }

include '../modelo/Conexion.php';
include '../modelo/usuario.php';
include '../controlador/loginController.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
        <body>
        
            <img class="wave1" src="../img/wave1.png" alt="">
            <div class="contenedor">
                <div class="img" >
                </div>
                <div class="contenido-login">
                    <form action="" method="post">
                        <img src="../img/serv1.jpg" alt="">
                        <h1>PRESTADORES DE SERVICIO EGAL</h1>
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
                        
                        <input type="submit" name="iniciar" onclick="validar()"  class="btn" value="iniciar sesion ">
                        <a href="Prestadores-de-servicio-EGAL-/login/"></a> 
                        <a href="../index.php"> Registrarse</a> 
                    </form>
                </div>
            </div>
            
        </body>
        <script src="../js/login.js"></script>
       </html>
       <?php
    
?>