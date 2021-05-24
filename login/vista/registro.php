<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script>
 

 
</script>
    </head>
        <body>
            <img class="wave1" src="../img/wave1.png" alt="">
            <div class="contenedor">
                <div class="img" >
                    
                
                </div>
             <div class="contenido-login">
                <form action="" method="post">
                        <img src="../img/serv1.jpg" alt="">
                        <h2>PRESTADORES DE SERVICIO EGAL</h2>
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
                        <div class="input-div dn1">
                            <div class="i">
                                <i class="fas fa-user"></i>
                            </div>
                            
                            <div class="div">
                                <h5>Tipo de usuario</h5>
                                <input type="text" id="tipo_usuario" name="tipo_usuario" class="input" >
                            </div>
                        </div>

                        
                        <input type="submit" onclick="validar()" name="registrar" class="btn" value="Registrar">
                        
                        <a href="login.php"> Iniciar sesion</a> 
                   </form>
                  
                </div>
                
            </div>
            <?php
                    include('../modelo/registrar.php');
                    ?>
                   
            
        </body>
      
     </head>
<script src="../js/login.js"></script>
</html>