<!DOCTYPE html>
<html lang="es">
    <head>
        <title>login</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script type="text/javascript">
         function validar(){
                    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(document.getElementById("usuario").value)) )
                            {
                                    alert('El correo deve ser en formato cuenta@dominio.abc');
                                    document.getElementById("usuario").style.backgroundColor='red';
                                    document.getElementById("usuario").focus();
                                    return false;
                            }
                            else{
                                    if(!(/^[0-9]/^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+)+[\s]*([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])*?$/
                                    .test(document.getElementById("pass").value)) )
                                    {
                                            alert('Ingrese su contraseña');
                                            document.getElementById("pass").style.backgroundColor='red';
                                            document.getElementById("pass").focus();
                                            return false;
                                    }
                    
                                   
                                    document.getElementById("usuario").style.backgroundColor='';
                                    document.getElementById("pass").style.backgroundColor='';
                                    
                                
                                }
                        
                        };	
                	
            
         </script>
    </head>
    <?php
    session_start();
    if(!empty($_SESSION['tipo_usuario'])){
        header ('location:../controlador/loginController.php');

    }
    else{
        session_destroy();
        ?>
        <body>
            <img class="wave1" src="../img/wave1.png" alt="">
            <div class="contenedor">
                <div class="img" >
                    
                
                </div>
                <div class="contenido-login">
                    <form action="../controlador/loginController.php" method="post">
                        <img src="../img/serv1.jpg" alt="">
                        <h2>PRESTADORES DE SERVICIO EGAL</h2>
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
                        
                        <input type="submit" onclick="validar()"  class="btn" value="iniciar sesion ">
                        <a href="registro.php"> Crear cuenta</a> 
                    </form>
                </div>
            </div>
            
        </body>
        <script src="../js/login.js"></script>
       </html>
       <?php
    }
?>
    
